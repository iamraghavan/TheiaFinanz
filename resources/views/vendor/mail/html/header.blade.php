@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
    <img src="{{ $url }}/assets/bumble-bees-logo.svg" class="logo" alt="Laravel Logo" style="display: block; margin: 0 auto;">
@else
    {{ $slot }}
@endif

</a>
</td>
</tr>
