<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Magical Skyland</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          fontFamily: {
            dance: ["Dancing Script", "Merriweather Sans", "Poppins"],
            merri: ["Merriweather Sans"],
            poppins: ["Poppins"],
          },
        }
      }
    </script>
  </head>
  <body class="flex min-h-full bg-white dark:bg-slate-900 font-poppins">
    <div class="flex w-full flex-col">
      <!-- Header -->
      <header
        class="sticky top-0 z-50 flex flex-none flex-wrap items-center justify-between bg-white px-4 py-2 border-b border-gray-200  sm:px-6 lg:px-16"
      >
        <div class="relative flex flex-grow basis-0 items-center">
          <a aria-label="Home page" href="https://syntax.tailwindui.com/">
            <img
              class="h-10 w-auto lg:hidden"
              src="{{asset('images/logoSmall.png')}}"
              alt="Code Mastery"
            />
            <img
              class="hidden h-16 w-auto fill-slate-700 lg:block"
              src="{{asset('images/logo.png')}}"
              alt="Code Mastery"
            />
          </a>
        </div>
        
        <div
          class="relative flex basis-0 justify-end gap-6 sm:gap-8 md:flex-grow"
        >
          <a
            href="#"
            class="flex group gap-2 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm hover:bg-green-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ring-1 ring-inset ring-green-500 uppercase"
          >
            <span class="whitespace-nowrap">Join Us</span>
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 fill-green-600">
              <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
              <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
            </svg>
          </a>
        </div>
      </header>
      <main>
        {{ $slot }}
      </main>

      <footer aria-labelledby="cause-heading">
        <div class="relative bg-gray-800 px-6 sm:px-12  lg:px-16">
          <div class="absolute inset-0 overflow-hidden">
            <img src="{{asset('images/footer.jpg')}}" alt="" class="h-full w-full object-cover object-center">
          </div>
          <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-60"></div>
          <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
            <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
              <!-- <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
                <div class="pb-6">
                  <a href="#" class="text-sm leading-6  text-gray-100 hover:text-gray-900">Home</a>
                </div>
                <div class="pb-6">
                  <a href="#" class="text-sm leading-6  text-gray-100 hover:text-gray-900">About</a>
                </div>
                <div class="pb-6">
                  <a href="#" class="text-sm leading-6  text-gray-100 hover:text-gray-900">Join Us</a>
                </div>
                <div class="pb-6">
                  <a href="#" class="text-sm leading-6  text-gray-100 hover:text-gray-900">Privacy Policy</a>
                </div>
              </nav>
              <div class="mt-10 flex justify-center space-x-10">
                <a href="#" class="text-gray-200 hover:text-gray-500">
                  <span class="sr-only">Facebook</span>
                  <svg class="h-6 w-6 fill-blue-500" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="text-gray-200 hover:text-gray-500">
                  <span class="sr-only">Instagram</span>
                  <svg class="h-6 w-6 fill-gray-500" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="text-gray-200 hover:text-gray-500">
                  <span class="sr-only">YouTube</span>
                  <svg class="h-6 w-6 fill-red-500" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div> -->
              <p class="mt-10 text-center text-base leading-5 text-gray-200">&copy; 2024 Magical Skyland, Inc. All rights reserved.</p>
              <p class="mt-5 text-center text-3xl leading-5 text-gray-200 font-dance">hello@magicalskyland.com</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body> 
</html>
