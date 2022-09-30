@props(['color' => 'green'])

<div {{ $attributes->merge(['class' => 'bg-'.$color.'-50 rounded-lg text-center contents']) }}>
	<span {{ $attributes->merge(['class' => 'text-'.$color.'-500 p-1']) }}>
		<strong>
			{{ $slot }}
		</strong>
	</span>
</div>