<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -mx-4 -my-8">
            @foreach($contents as $content)
            <div class="py-8 px-4 lg:w-1/3">
              <div class="h-full flex items-start">
                <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                </div>
                <div class="flex-grow pl-6">
                  {{-- <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2> --}}
                  <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{$content->created_at}}</h1>
                  <p class="leading-relaxed mb-5">  <p>{{$content->post}}</p></p>
                  <a class="inline-flex items-center">
                    <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                    <span class="flex-grow flex flex-col pl-3">
                      <span class="title-font font-medium text-gray-900">{{$content->user->name}}</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
            <div class="py-8 px-4 lg:w-1/3">
          </div>
        </div>
        <div class='flex justify-center'>{{$contents->links()}}</div>
      </section>
</x-app-layout>
