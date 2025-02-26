<x-auth.app title="SIGNUP">

    {{-- <x-auth.header/> --}}
  
    <div class="container">
      <div class="login form">
        <header>Your uploaded files</header>
        <div>
            @forelse ($files as $file)
            <div style="display: flex; justify-content: center;">
                <img src="/images/socials/x.png" alt="">
                <a href="">Download</a>
            </div>
            @empty
                <h3>
                    You haven't uploaded any files yet.
                </h3>
                <p>
                    <a href="{{route('file.uploads')}}">Click here</a> to upload files
                </p>
            @endforelse
        </div>
    </div>
  
    <x-auth.footer/>
  
  </x-auth.app>
