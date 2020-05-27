@extends('layouts.app')
@section('content')
       <div class="container">
              <div class="row">
                     <div class="col-12">
                            <form class="" action="{{route('admin.pages.store')}}" method="POST">
                                   @csrf
                                   @method('POST')
                                   <div class="form-group">
                                          <label for="title">
                                                 Titolo
                                          </label>
                                          <input type="text" name="title" class="form-control">
                                   </div>
                                   <div class="form-group">
                                          <label for="summary">
                                                 Sommario
                                          </label>
                                          <input type="text" name="summary" class="form-control">
                                   </div>
                                   <div class="form-group">
                                          <label for="body">
                                                 testo
                                          </label>
                                          <textarea class="form-control"name="body" rows="10" cols="30"></textarea>
                                   </div>
                                   <div class="form-group">
                                          <label for="category_id">Categoria</label>
                                          <select id="category_id" name="category_id">
                                                 @foreach ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                                 @endforeach
                                          </select>
                                   </div>
                                   <div class="form-group">
                                          <h3>Tags</h3>
                                                 @foreach ($tags as $tag)
                                                        <label for="{{$tag->id}}">{{$tag->name}}</label>
                                                        <input type="checkbox" value="{{$tag->id}}" name="tags[]" id="tags-{{$tag->id}}">
                                                 @endforeach

                                   </div>
                                   <div class="form-group">
                                          <h3>Photos</h3>
                                                 @foreach ($photos as $photo)
                                                        <label for="{{$photo->id}}">{{$photo->name}}</label>
                                                        <input type="checkbox" value="{{$photo->id}}" name="photos[]" id="photos-{{$photo->id}}">
                                                 @endforeach

                                   </div>
                                          <input type="submit" class="btn btn-primary" value="Salva">

                            </form>
                     </div>
              </div>
       </div>
@endsection
