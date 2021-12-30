<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sales sheet</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
@include("_heading")
<h1>Create Sale</h1>

<div class="grid grid-cols-3">
    <div></div>
    <div>
        <form method="POST" action="{{ route('sale.store') }}">
            @csrf

            <div class="p-4"></div>


            <select name="user_id" id="user_id" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Name">
                <option value="0">Name</option>
                <option value="new">Create New Customer</option>
                @foreach($user as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

            <div class="p-4"></div>

            <input name="user_name" id="user_name" class="mb-4 font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Customer Name">
            <input name="cell" id="cell" class="mb-4 font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Cell (optional)">
            <input name="email" id="email" class="mb-4 font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Email (optional)">

            <input name="total" id="total" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Total">

            <div class="p-4"></div>

            <button class="w-full py-4 px-4 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Submit
            </button>

            <div class="pt-4"></div>

        </form>
    </div>
</div>
</body>

</html>
