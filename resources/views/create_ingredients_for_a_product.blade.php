<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ingredient</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<h1>Add ingredients for a product</h1>
        <div class="grid grid-cols-3">
            <div></div>
            <div>
                <input type="text" name="name" id="name" class="w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Add ingredient to database">
                <div class="p-4"></div>
                <select type="text" name="name" id="name" class="w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="teaspoons">
                    <option>1/8 tsp</option>
                    <option>1/4 tsp</option>
                    <option>1/2 tsp</option>
                    <option>1 tsp</option>
                    <option>2 tsp</option>
                    <option>1/2 TB</option>
                    <option>3 tsp/1 TB</option>
                    <option>4 tsp</option>
                    <option>1 ounce</option>
                    <option>2 ounces</option>
                    <option>3 ounces</option>
                    <option>4 ounces</option>
                </select>
            </div>
        </div>
</body>

</html>
