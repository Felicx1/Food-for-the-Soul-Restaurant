<x-guest-layout>
    
<section class="pt-12 pb-12 bg-red-50">
      <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
        <div class="w-full">

          <h1
            class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
            Please Contact Us
          </h1>
          <div class="gap-2 mb-8 lg:flex">
            <div class="w-full">
              <label class="block text-base">
                First Name
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="First Name" />
            </div>
            <div class="w-full">
              <label class="block text-base">
                Last Name
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Last Name" />
            </div>


            <div class="w-full">
              <label class="block text-base">
                Phone Number
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Phone Number" />
            </div>
          </div>
          
          <div class="">
            <label class="block text-base">
              Your Message
            </label>
            <textarea name="" id="" rows="4" cols="30"
              class="w-full text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
              placeholder="Message"></textarea>
          </div>
          <button
            class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
            href="#">
            Send
          </button>

        </div>
      </div>
    </section>

</x-guest-layout>