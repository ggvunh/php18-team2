
<div class="box-body">
  <div class="form-group">
    <label for="name">Tên:</label>
    <input type="name" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="price">Giá:</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>
  <div class="form-group">
    <label for="images">Images:</label>
    <input type="file" class="" id="images" name="images">
</div>
<div class="form-group">
    <label for="name">Active:</label>
    <input type="checkbox" name="active"  checked="">
  </div>
  <div class="form-group">
      <label for="category_id">Category:</label>
      {!! Form::select('category_id', $categories, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
      <label for="brand_id">Brand:</label>
     
      <select  id="brand_id" name="brand_id">
       @foreach ($brands as $brand)
        <option value="{{ $brand->id}}">{{ $brand->name}}</option>
       @endforeach
      </select>
     
  </div>
  <div class="form-group">
    <label for="quantity">Số lượng:</label>
    <input type="number" name="quantity" id="quantity">
  </div>
  <div class="form-group">
    <label for="detail">Mô tả: </label>
    <textarea id="detail" name="detail"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Lưu</button>
</div>