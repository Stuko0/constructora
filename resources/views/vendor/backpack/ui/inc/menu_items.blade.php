{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Projects" icon="la la-question" :link="backpack_url('project')" />
<x-backpack::menu-item title="Resources" icon="la la-question" :link="backpack_url('resource')" />
<x-backpack::menu-item title="Budgets" icon="la la-question" :link="backpack_url('budget')" />
<x-backpack::menu-item title="Tasks" icon="la la-question" :link="backpack_url('task')" />
<x-backpack::menu-item title="Task resources" icon="la la-question" :link="backpack_url('task-resource')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Comments" icon="la la-question" :link="backpack_url('comment')" />