{{ Illuminate\Mail\Markdown::parse('---') }}

Thank you,<br>
{{ config('app.name') ?? 'Bedrock' }}

{{ Illuminate\Mail\Markdown::parse('[Contact Support](https://bedrock.io/docs/contact)') }}
