<x-layout>
    <x-AuthNavigationBar>
        <div class="flex items-center justify-center min-h-screen py-10 lg:p-0 ">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <fieldset class="fieldset bg-base-200 border border-base-300 rounded-box w-80 p-6">
                    <div class="flex items-center justify-center text-center flex-col">
                        <img src="{{asset('image/STI_LOGO_for_eLMS.png')}}" class="w-20" alt="">
                        <div class="w-full border-t-2 border-base-300 my-3"></div>
                        <h2 class="text-2xl text-base-content font-semibold">Login</h2>
                        <p class="text-base-content"> Doesn’t have an account yet? <a href="{{route('show.register')}}"
                                                                                      class="underline">Signup</a></p>
                    </div>
                    <x-FormLayout type="text" value="{{old('student_id_number')}}" name="student_id_number"
                                  placeholder="Enter Student ID Number" label="Student ID Number">

                    </x-FormLayout>
                    <x-FormLayout type="password" name="password" placeholder="Enter Password" label="Password">
                    </x-FormLayout>
                    <button class="btn btn-neutral mt-6 w-full">Login</button>
                </fieldset>
            </form>
        </div>
    </x-AuthNavigationBar>
</x-layout>
