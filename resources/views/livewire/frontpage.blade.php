<div>
    <div class="border p-5 text-gray-100 bg-gray-500 text-3xl sm:bg-blue-500 md:bg-red-500 lg:bg-yellow-400 xl:bg-green-500">
        {{ $title }}
    </div>
    <div class="lg:flex">
        <div class="border p-5 text-center sm:text-left lg:w-1/2">
            {!! $content !!}
        </div>
        <div class="border bg-gray-400 lg:w-1/2">
            <img class="w-full h-full object-cover object-center" src="{{'img/cake.jpg'}}" alt="">
        </div>
    </div>
</div>
