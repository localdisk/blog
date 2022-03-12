<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name'))</title>
  <livewire:styles />
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @stack('styles')
</head>

<body>

  <div>
    {{-- header --}}
    <header class="p-4 bg-gray-700 sticky">
      <div class="flex justify-between shadow-md">
        <div class="text-white text-xl font-semibold">blog 管理画面</div>
        <div class="text-white text-xl font-semibold">username</div>
      </div>
    </header>

    <div class="flex flex-row h-screen">
      {{-- sidebar --}}
      <div class="basis-1/12 bg-gray-700 h-full">
        <ul>
          <li>
            <a href="#" class="px-4 py-2 hover:bg-gray-500 text-white text-lg block">Post</a>
          </li>
        </ul>
      </div>
      {{-- content --}}
      <div class="basis-11/12 p-2 text-lg">
        {{ $slot }}
      </div>
    </div>

  </div>

  <livewire:scripts />
  <script src="{{ mix('js/app.js') }}"></script>
  @stack('scripts')

</body>

</html>
