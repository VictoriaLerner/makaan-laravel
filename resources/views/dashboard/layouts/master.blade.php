@include('dashboard.parts.header')
<!-- Left Panel -->
@include('dashboard.parts.sidebar')
<!-- /#left-panel -->
<!-- Right Panel -->
<div    id="right-panel"  class="right-panel">
    <!-- Header-->
    @include('dashboard.parts.top-bar')

    <!-- /#header -->
    <!-- Content -->

    @section('content')
    @show

    @include('dashboard.parts.footer')
    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

@include('dashboard.parts.footer-scripts')
