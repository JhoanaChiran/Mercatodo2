<x-slot name="header">
    <h1 class="text-grey-900">MERKATODO</h1>
</x-slot>    
    
<div class="py-12">
    <div>
        <div>

        </div>
    </div>
</div>



    <table class="table-fixed w-full">
        <thead>
        <tr class="bg-indigo-600 text-white">
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">CODE</th>
        <th class="px-4 py-2">NAME</th>
        <th class="px-4 py-2">DESCRIPTION</th>
        <th class="px-4 py-2">PRICE</th>
        <th class="px-4 py-2">QUANTITY</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="border px-4 py-2">{{$product}}</td>
                <td class="border px-4 py-2">{{$product}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>            

