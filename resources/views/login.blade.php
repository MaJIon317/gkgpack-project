<div>

    <div class="flex justify-center items-center h-screen bg-gray-100 px-6">
        <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
            <div class="flex justify-center items-center mb-9">
                <svg class="h-10 w-10" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"/>
                </svg>
                <span class="text-gray-700 font-semibold text-2xl">{{ __('Dashboard') }}</span>
            </div>

            <form wire:submit="login">
                
                <div class="mb-4">
                    <x-fields.text 
                        name="email" 
                        wire:model="email"
                        label="{{ __('Email') }}" 
                        placeholder="{{ __('Enter your email') }}"
                        required
                    />
                </div>
 
                <div class="mb-6">
                    <x-fields.text 
                        type="password"
                        name="password" 
                        wire:model="password"
                        label="{{ __('Password') }}" 
                        placeholder="{{ __('Enter the Password') }}"
                        required
                    />
                    
                </div>
                <div class="mb-5"> 
                    <x-button type="submit" message="{{ __('Login') }}" style="width: 100%" />
                </div>
            </form>
        </div>
    </div>
</div>
