@component($typeForm,get_defined_vars())
    <div class="repeater"
         data-controller="fields--repeater"
         data-fields--repeater-name="{{ $name }}"
         data-fields--repeater-handler="{{$handler}}"
         data-fields--repeater-url="{{route('platform.systems.widget', Base64Url\Base64Url::encode($handler))}}"
         data-fields--repeater-value="{{ json_encode($value) }}">
        <div class="row">
            <div class="col-md-12">
                <section class="repeaters_container" data-target="fields--repeater.repeaterContainer"></section>
                <span data-action="click->fields--repeater#addBlock" class="icon-plus add_block"></span>
            </div>
        </div>

        {{--Template for card--}}
        <script type="text/html" data-target="fields--repeater.template">
            <div class="card repeater-item" data-sort="@{{block_key}}">
                <div class="card-header">
                    <h5 class="actions">
                        <span class="card-handle icon-size-fullscreen"></span>
                        <span class="icon-plus" data-action="click->fields--repeater#addBlock"></span>
                        <span class="icon-minus" data-action="click->fields--repeater#deleteBlock"></span>
                    </h5>
                </div>
                <div class="card-body repeater-content">
                    @{{content}}
                </div>
            </div>
        </script>
    </div>
@endcomponent