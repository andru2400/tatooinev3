<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.user.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/options') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.option.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/rules') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.rule.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/fields') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.field.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/field-types') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.field-type.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/campaigns') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.campaign.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/roles') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.role.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/permissions') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.permission.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/campaign-owners') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.campaign-owner.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/countries') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.country.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/departaments') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.departament.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/cities') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.city.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/owner-locations') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.owner-location.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Administrar acceso') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Traducciones') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
