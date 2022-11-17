@include('admin.parts.header')
<!-- Left Panel -->
@include('admin.parts.sidebar')
<!-- /#left-panel -->
<!-- Right Panel -->
<div    id="right-panel"  class="right-panel">
    <!-- Header-->
    @include('admin.parts.top-bar')

    <!-- /#header -->
    <!-- Content -->

    @section('content')
    @show

    @include('admin.parts.footer')
    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

@include('admin.parts.footer-scripts')
