@extends('layouts.app')
@section('content')

<body>
    <style>
        table tr{
           
            border-collapse: collapse;
        }
        table td{
            text-align: center;
        }
        table th{
            text-align: center;
        }


        
      
    </style>
    <div class="main-div">
        <div class="head-div">
            <div class="main">
                <div class="head">
                    <span>EVEST</span>
                    <p>THE BIGGEST CHOICE OF THE WEB</p>
                </div>
                <div class="btn">
                    <a href="login"><input type="button" name="" value="Log Out"></a>
                </div>
            </div>
        </div>
        <div class="home-page">
            <div class="pagnation">
                <div class="list">
                    <ul>
                        <a href="home"><li>HOME</li></a>
                        <a href="add_product"><li>NEW PRODUCT</li></a>
                        <a href="#"><li>MY CART</li></a>
                        <a href="all_products"><li>ALL PRODUCTS</li></a>
                        <a href="#"><li>REVIEWS</li></a>
                        <a href="contact"><li>CONTACT</li></a>
                        <a href="#"><li>FAQS</li></a>

                    </ul>
                </div>
                <div class="search">
                    <div class="search-1">
                        <div class="input">
                            <input type="text" name="">
                        </div>
                        <div class="btnn">
                            <input type="button" name="" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="null">
            
        </div>
        <div class="main-categorious">
            <div class="footer">
                
                <div class="categorious">
                    <div class="cate-heading">
                        <p>CATEGORIES</p>
                    </div>
                    <div class="items">
                        <ul>
                            @isset($data1)
                            @foreach($data1 as $category)
                            <a href="{{url('/findid/'.$category->id)}}">
                                <li>{{$category->category_name}}</li>
                            </a>
                            @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact-us">
                        <p>My Cart</p>
                    </div>
                    <div class="Camera-info">

                         <table  border="1"  width="100%">
                <tr>
                    <th>Id</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Product ID</th>
                    <th>Product name</th>
                    <th>Product model</th>
                    <th>Product image</th>
                    <th>Product category</th>
                </tr>
                @isset($data)
                @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->quantity}}</td>
                    <td>${{$row->total_price}}</td>
                    <td>{{$row->product_id}}</td>
                    <td>{{$row->product->p_name}}</td>
                    <td>{{$row->product->p_model}}</td>
                    <td><img src="{{ asset('upload_image/'. $row->product->p_image)}}" width="80px"></td>
                    <td>{{$row->product->p_category}}</td>
                </tr>
                @endforeach
                @endisset
            </table>
                    </div>
                </div>
                <div class="footer-2">
                    <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection 





 