
	<link rel="stylesheet" href="css/email.css">
	
    <div id="wrap-inner">
        <div id="khach-hang">
            <h3>Thông tin khách hàng</h3>
            <p>
                <span name='name' class="info">Khách hàng: </span>
                {{$info['name']}}
            </p>
            <p>
                <span name='email' class="info">Email: </span>
                {{$info['email']}}
            </p>
            <p>
                <span name='phone' class="info">Điện thoại: </span>
                {{$info['phone']}}
            </p>
            <p>
                <span name='content'class="info">Info Content</span>
                {{$info['content']}}
            </p>
        </div>						
        
    </div>					
