<div class="bg-gray-800 text-white w-64 px-6 py-8">
    <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
    <ul class="mt-8">
        <li class="my-3">
            <a href="#" class="flex items-center text-gray-300 hover:text-white">
                Dashboard
            </a>
        </li>
        <li class="my-3">
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center text-gray-300 hover:text-white">
                    User 
                    <svg x-show="!open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg x-show="open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </button>
                <ul x-show="open" class="ml-4 mt-2 space-y-2">
                    <li><a href="{{route('admin.all.users')}}" class="text-gray-300 hover:text-white">All Users</a></li>
                   
                </ul>
            </div>
        </li>
        <li class="my-3">
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center text-gray-300 hover:text-white">
                    Products
                    <svg x-show="!open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg x-show="open" class="ml-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </button>
                <ul x-show="open" class="ml-4 mt-2 space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">All Products</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Add Product</a></li>
                </ul>
            </div>
        </li>
        <!-- Add more menu items here -->
    </ul>
</div>