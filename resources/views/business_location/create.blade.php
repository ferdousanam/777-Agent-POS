<div class="modal-dialog" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('BusinessLocationController@store'), 'method' => 'post', 'id' => 'business_location_add_form' ]) !!}

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">@lang( 'business.add_business_location' )</h4>
    </div>

    <div class="modal-body">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            {!! Form::label('name', __( 'Business Name' ) . ':') !!}
              {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __( 'Business Name' ) ]); !!}
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('business_sku', __( 'Business Sku' ) . ':') !!}
              {!! Form::text('business_sku', null, ['class' => 'form-control', 'placeholder' => __( 'Business Sku' ) ]); !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('business_activity', __( 'Business Activity' ) . ':') !!}
              {!! Form::text('business_activity', null, ['class' => 'form-control', 'placeholder' => __( 'Business Activity' ) ]); !!}
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('city', __( 'business.city' ) . ':') !!}
              {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => __( 'business.city') ]); !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('zip_code', __( 'business.zip_code' ) . ':') !!}
              {!! Form::text('zip_code', null, ['class' => 'form-control', 'placeholder' => __( 'business.zip_code')]); !!}
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('state', __( 'business.state' ) . ':') !!}
              {!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => __( 'business.state')]); !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('country', __( 'business.country' ) . ':') !!}
              {!! Form::text('country', null, ['class' => 'form-control', 'placeholder' => __( 'business.country')]); !!}
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('phone', __( 'Phone' ) . ':') !!}
            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => __( 'Phone')]); !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('street_address_1', __( 'Street Address 1' ) . ':') !!}
            {!! Form::text('street_address_1', null, ['class' => 'form-control', 'placeholder' => __( 'Street Address 1')]); !!}
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('email', __( 'business.email' ) . ':') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => __( 'business.email')]); !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('street_address_2', __( 'Street Address 2' ) . ':') !!}
            {!! Form::text('street_address_2', null, ['class' => 'form-control', 'placeholder' => __( 'Street Address 2')]); !!}
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('invoice_scheme_id', __('invoice.invoice_scheme') . ':') !!} @show_tooltip(__('tooltip.invoice_scheme'))
              {!! Form::select('invoice_scheme_id', $invoice_schemes, null, ['class' => 'form-control', 'placeholder' => __('messages.please_select')]); !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            {!! Form::label('invoice_layout_id', __('invoice.invoice_layout') . ':') !!} @show_tooltip(__('tooltip.invoice_layout'))
              {!! Form::select('invoice_layout_id', $invoice_layouts, null, ['class' => 'form-control', 'placeholder' => __('messages.please_select')]); !!}
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
        <hr/>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('credit', __('Credit') . ':') !!}
            {!! Form::text('credit', null, ['class' => 'form-control',
                'placeholder' => __('Credit')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('ceo', __('CEO') . ':') !!}
            {!! Form::text('ceo', null, ['class' => 'form-control',
                'placeholder' => __('CEO')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('legal_name', __('Legal Name') . ':') !!}
            {!! Form::text('legal_name', null, ['class' => 'form-control',
                'placeholder' => __('Legal Name')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('domain_name', __('Domain Name') . ':') !!}
            {!! Form::text('domain_name', null, ['class' => 'form-control',
                'placeholder' => __('Domain Name')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('tps_nbr', __('TPS NBR') . ':') !!}
            {!! Form::text('tps_nbr', null, ['class' => 'form-control',
                'placeholder' => __('TPS NBR')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('tvq_nbr', __('TVQ NBR') . ':') !!}
            {!! Form::text('tvq_nbr', null, ['class' => 'form-control',
                'placeholder' => __('TVQ NBR')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('canada_border', __('Canada Border') . ':') !!}
            {!! Form::text('canada_border', null, ['class' => 'form-control',
                'placeholder' => __('Canada Border')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('agencie_nbr', __('Agencie NBR') . ':') !!}
            {!! Form::text('agencie_nbr', null, ['class' => 'form-control',
                'placeholder' => __('Agencie NBR')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('seller_nbr', __('Seller NBR') . ':') !!}<br/>
            {!! Form::text('seller_nbr', null, ['class' => 'form-control',
                'placeholder' => __('Seller NBR')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('revenue_quebec_file_nbr', __('Revenue Quebec File NBR') . ':') !!}
            {!! Form::text('revenue_quebec_file_nbr', null, ['class' => 'form-control',
                'placeholder' => __('Revenue Quebec File NBR')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('revenue_canada_file_nbr', __('Revenue Canada File NBR') . ':') !!}
            {!! Form::text('revenue_canada_file_nbr', null, ['class' => 'form-control',
                'placeholder' => __('Revenue Canada File NBR')]); !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('other', __('Other') . ':') !!}
            {!! Form::text('other', null, ['class' => 'form-control',
                'placeholder' => __('Other')]); !!}
        </div>
      </div>
        <div class="clearfix"></div>
      <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('business_percentage', __('Business %') . ':') !!}
            {!! Form::text('business_percentage', null, ['class' => 'form-control',
                'placeholder' => __('Business %')]); !!}
        </div>
      </div>

      </div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->