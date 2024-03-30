<div class="sl-logo"><a href="{{ route('dashboard') }}">DASHBOARD</a></div>
<div class="sl-sideleft">
  <div class="card">
    <div class="">
        <div class="">
            <div class="text-center">
                <h5>Hi.. I'm</h5>
              </div>
            <h5 class="text-center">{{ auth()->user()->name }}</h5>

        </div>
    </div>
  </div>

  <div class="sl-sideleft-menu">
    <a href="{{ route('vatcal.index') }}" class="sl-menu-link {{ request()->is('vatCalculator*') ? 'active' : '' }}">
      <div class="sl-menu-item">
        <span class="menu-item-label">Vat Calculator</span>
      </div>
    </a>
    <a href="{{ route('home') }}" class="sl-menu-link ">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Home</span>
        </div>
      </a>

  </div>

  <br>
</div>
