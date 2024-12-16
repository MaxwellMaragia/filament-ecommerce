<x-mail::message>
# Order placed successfully

Thank you for your order. Your order number is : {{ $order->id }}. Our team will be in contact with you

<x-mail::button :url="$url">
VIew order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
