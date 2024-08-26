{{-- 
@if($type === 'add-product')
    <span>New Product was added by</span>
    <span>{{ $recipent }}</span>
@endif

@if($type === 'update-product')
    <span> Product was updated by</span>
    <span>{{ $recipent }}</span>
@endif


@if($type === 'delete-product')
    <span> Product was deleted by</span>
    <span>{{ $recipent }}</span>
@endif

@if($type === 'change-order-status')
    <span>Your Order status was changed by</span>
    <span>{{ $recipent }}</span>
@endif

@if($type === 'order-success')
    <span>Your Order  was successed by</span>
    <span>{{ $recipent }}</span>
@endif

@if($type === 'order-create')
<span>New order was recived by</span>
<span>{{ $recipent }}</span>
@endif

@if($type === 'out-stock')
<span>check product!some product is out of stock</span>
@endif

@if($type === 'write-review')
<span>New review was written by</span>
<span>{{ $recipent }}</span>
@endif

@if($type === 'subscribe')
<span>{{ $recipent }} was subscribed</span>
@endif

@if($type === 'recive-coupon')
<span>You get a discount coupon.check your mail</span>

@endif
 --}}

 

 @if($type === 'schedule-accept')
<span>Your requested schedule was accepted by</span>
<span>{{ $sender->name }}</span>
@endif

@if($type === 'schedule_request')
<span>{{ $sender->name }} was requested to meet </span>
@endif

@if($type === 'enquiry-request')
<span>Someone was requested enquriy </span>
@endif

@if($type === 'schedule-reject')
<span>Your requested schedule was rejected by</span>
<span>{{ $sender->name }}</span>
@endif

@if($type === 'renting-success')
<span>Your renting process was successed 😉🎉</span>
@endif

@if($type=='renting-recive')
<span>Your property is renting by</span>
<span>{{ $sender->name }}</span>
@endif

@if($type === 'booking_cancel_success')
<span>Successfully cancel your booking 😉🎉</span>
@endif

@if($type=='cancel_booking')
<span>{{ $sender->name }} was cancelled booking 🤦‍♂️</span>
@endif


@if($type=='property-post')
<span>{{ $sender->company_name}} was create new property.</span>
@endif

@if($type=='news-like')
<span>{{ $sender->name}} was liked on news</span>
@endif

@if($type=='news-comment')
<span>{{ $sender->name}} was written comment on news</span>
@endif

@if($type=='transcation-success')
<span>Transcation was success</span>
@endif

@if($type=='transcation-send')
<span>{{ $sender->name }} send transcation</span>
@endif

@if($type =='buy-success')
<span>Your buying property from {{ $sender->name }} was successed.</span>
@endif

@if($type =='send-sale-transcation')
<span>{{ $sender->name }} was send transcation to buy property.</span>
@endif