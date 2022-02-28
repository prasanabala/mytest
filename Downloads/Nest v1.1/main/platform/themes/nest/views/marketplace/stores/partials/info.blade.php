<ul class="font-sm mb-20">
    @if ($store->address)
        <li>
            <img src="{{ Theme::asset()->url('imgs/theme/icons/icon-location.svg') }}" alt="{{ __('Address') }}" />
            <strong class="d-inline-block">{{ __('Address') }}: </strong>
            <span class="d-inline-block">{{ $store->address }}, {{ $store->city }}, {{ $store->state }}, {{ $store->country_name }}</span>
        </li>
    @endif
    @if ($store->phone)
        <li>
            <img src="{{ Theme::asset()->url('imgs/theme/icons/icon-contact.svg') }}" alt="{{ __('Phone') }}" />
            <strong class="d-inline-block">{{ __('Call Us') }}:</strong>
            <span class="d-inline-block">{{ $store->phone }}</span>
        </li>
    @endif
</ul>
