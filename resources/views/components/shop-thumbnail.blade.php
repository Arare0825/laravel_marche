   <div>
   @if(empty($shop->filenjame))
   <img src="{{ asset('images/no_image.jpg') }}">
   @else
   <img src="{{ asset('storage/shops/' . $shop->filename) }}">
   @endif
   </div>
