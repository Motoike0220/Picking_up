<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <p class="leading-relaxed text-lg">{{$post->post}}</p>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">{{$post->user->name}}</h2>
            <p class="text-gray-500">{{$post->created_at}}</p>
            <button class="bg-blue-400 inline-flex py-3 px-5 rounded-lg items-center hover:bg-blue-200 focus:outline-none"><a href="{{route("posts.edit",['id' => $post->id])}}" >編集する</a></button>
          </div>
        </div>
      </section>

</x-app-layout>
