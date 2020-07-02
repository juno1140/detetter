<x-master>
    <div class="container mx-auto flex justify-center ">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">
                            Email
                        </label>
                        <input
                            class="border border-gray-400 p-2 w-full"
                            type="text"
                            name="email"
                            id="email"
                            autocomplete="email"
                            value="{{ old('email') }}"
                            required
                        >
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">
                            Password
                        </label>
                        <input
                            class="border border-gray-400 p-2 w-full"
                            type="password"
                            name="password"
                            id="password"
                            autocomplete="current-password"
                            required
                        >
                    </div>

                    <div class="mb-6">
                        <div>
                            <input
                                class="mr-1"
                                type="checkbox"
                                name="remenber"
                                id="remenber" {{ old('remenber') ? 'checked' : '' }}
                            >
                            <label class="uppercase font-bold text-xs text-gray-700" for="remenber">
                                Remenber Me
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                            Submit
                        </button>

                        <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot Your Password?</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-master>