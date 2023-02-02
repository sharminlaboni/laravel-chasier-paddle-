<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3>all plan</h3>
                @if($subscriptions->count())
                <table>
                    <tr>
                        <th>name</th>
                        <th>paddle_id</th>
                        <th>paddle_status</th>
                        <th>paddle_plan</th>
                        <th>action</th>
                    </tr>
                    <tbody>
                        @foreach($subscriptions as $subscription)
                        <tr class ="text-center h-10">
                            <td>{{$subscription->name}}</td>
                            <td>{{$subscription->paddle_id}}</td>
                            <td>{{$subscription->paddle_status}}</td>
                            <td>{{$subscription->paddle_plan}}</td>
                            <td>
                                <a href="/cancel/{{$subscription->id}}" class="bg-red-600 text-white roounded px-2 py-1 my-2">cancel</td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
                @endif

                @if($currentplan)
                <form action="/swap" method="POST">
                    @csrf
                    <select name="plan" id="plan">
                    @foreach($plans as $plan)
                    <option value="{{$plan}}">{{$plan->name}} | ${{$plan->price}}</option>

                     @endforeach
                    </select>
                   <button type="submit" class="px-8 py-4">swap</button>
                </form>
                @else

                <form action="/subscribe" method="POST">
                    @csrf
                    <select name="plan" id="plan">
                    @foreach($plans as $plan)
                    <option value="{{$plan}}">{{$plan->name}} | ${{$plan->price}}</option>

                     @endforeach
                    </select>
                   <button type="submit" class="px-8 py-4">Subscribe</button>
                </form>
               @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
