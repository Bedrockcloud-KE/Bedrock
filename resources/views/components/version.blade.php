<a {{ $attributes->merge(['class' => 'text-xs cursor-pointer opacity-90 hover:opacity-100 dark:hover:text-white hover:text-black']) }}
    href="https://github.com/coollabsio/bedrock/releases/tag/v{{ config('constants.bedrock.version') }}" target="_blank">
    v{{ config('constants.bedrock.version') }}
</a>
