
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile2.update2') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-3">
            <x-input-label for="" :value="__('Navigatu ID')" />
            <x-text-input id="id" name="id" type="text" class="form-control" :value="old('id', $user->id)" readonly/>
        </div>
        
        <div class="mb-3">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div class="mb-3">
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" name="age" type="text" class="form-control" :value="old('age', $user->age)"  />
            <x-input-error class="mt-2" :messages="$errors->get('age')" />
        </div>
        <div class="mb-3">
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input id="department" name="department" type="text"  class="form-control" :value="old('department', $user->department)"   />
            <x-input-error class="mt-2" :messages="$errors->get('department')" />
        </div>
        <div class="mb-3">
          <x-input-label for="designation" :value="__('Designation')" />
            <x-text-input id="designation" name="designation" type="text"  class="form-control" :value="old('designation', $user->designation)"   />
            <x-input-error class="mt-2" :messages="$errors->get('designation')" />
        </div>
        <div class="mb-3">
            <x-input-label for="undergrad" :value="__('UnderGrad Course')" />
            <x-text-input id="undergrad" name="undergrad" type="text"  class="form-control" :value="old('undergrad', $user->undergrad)" />
            <x-input-error class="mt-2" :messages="$errors->get('undergrad')" />
          </div>
        
        <div class="mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mb-3">
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        
        <div class="d-flex align-items-center gap-4">
            <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>
        
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
        
    </form>
</section>
