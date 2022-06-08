<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blogs') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                {{-- //////////////////blog --}}
            <form action="" >
                @auth
                <div class="mb-3 d-flex justify-content-around">
                    <input type="text" class="form-control mt-3 ml-4 rounded" style="width: 700px; "  id="formGroupExampleInput" placeholder="Write Your Blog">
                    <button type="submit" class="btn  mt-3 ml-4 rounded border-primary" name="Submit">POST</button>
                </div>
                @endauth
            </form>
            </div>

            {{-- //////////////////////////////// post  --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-5 p-2">
                <h2 class="m-2">amer</h2>
                <p class="ml-4 mt-3">موقع ويب يتيح لك أو لمؤسستك إمكانية مشاركة الأفكار والمعلومات بشكل سريع. حيث تحتوي السجلات على عمليات نشر مؤرخة وموضوعة في قائمة بترتيب زمني عكسي. ولا يمكن للمستخدمين التعليق على عمليات النشر الخاصة بك، بالإضافة إلى أن السجلات توفر الارتباطات لمواقع وصور شيقة وسجلات مرتبطة.</p>
                <form action="" class="mt-3" >
                    @auth
                    <div class="mb-3 d-flex justify-content-around">
                        <input type="text" class="form-control mt-3 ml-4 rounded"   id="formGroupExampleInput" placeholder="Write Your comment">
                        <button type="submit" class="btn  mt-3 ml-4 rounded border-primary" name="Submit">Comment</button>
                    </div>
                    @endauth
                </form>
                <div class=" m-3 bg-light p-1 rounded " >
                    <h3 class="m-2">amer</h3>
                    <p class="ml-4 " >ما شاء الله </p>
                </div>
                <div class=" m-3 bg-light p-1 rounded " >
                    <h3 class="m-2">ahmed</h3>
                    <p class="ml-4" >ما شاء الله </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
