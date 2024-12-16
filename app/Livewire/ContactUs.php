<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $comment;
    public $success;

    public function contactFormSubmit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required|min:5',
        ]);

        Mail::send('mail.contact.email',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'comment' => $this->comment,
            ),
            function ($message) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->to(config('mail.from.address'), 'Bobby')->subject(env('APP_NAME') . ' Contact form');
            }
        );

        session()->flash('success', 'Thank you for reaching out to us. We will get back to you soon.');

    }

    public function render()
    {
        return view('livewire.contact-us', [
            'SEOData' => new SEOData(
                title: 'Contact Us | ' . env('APP_NAME'),
                description: 'Get in touch with ' . env('APP_NAME') . ' for
                expert advice on solar energy solutions and lighting options. Our dedicated team is here to answer your
                questions.',
                image: url('storage', 'home/brand-image.jpg'),
                robots: 'index,follow',
            ),
        ]);
    }
}
