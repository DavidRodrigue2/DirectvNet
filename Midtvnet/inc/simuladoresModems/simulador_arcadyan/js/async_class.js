
function async_class( show_err )
{
	this.show_err = show_err ;
	this.http_req = null;

	this.Obj = function()
	{
		return this.http_req ;
	}

	this.init = function()
	{
		this.http_req = null;
        if (window.XMLHttpRequest) { // Mozilla, Safari,...
            this.http_req = new XMLHttpRequest();
            if (this.http_req.overrideMimeType) {
                this.http_req.overrideMimeType('text/xml');
            }
        } else if (window.ActiveXObject) { // IE
            try {
                this.http_req = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    this.http_req = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}
            }
        }

        if (!this.http_req) {
            this.msg('Cannot create an XMLHTTP instance' );
            return false;
        }
		return true;
	}

	this.doGet = function( url, parameters, callback )
	{
		return this.doRequest( 'GET', url, parameters, callback ) ;
	}
	this.doPost = function( url, parameters, callback )
	{
		return this.doRequest( 'POST', url, parameters, callback ) ;
	}
	this.doHead = function( url, parameters, callback )
	{
		return this.doRequest( 'HEAD', url, parameters, callback ) ;
	}

	this.doRequest = function( method, url, parameters, callback )
	{
		// method: 'GET', 'POST', 'HEAD'
		// url: 'http://www.example.org/some.file'
		// parameters: null or 'name=value&anothername=othervalue&so=on'
		// callback prototype: function()
		if( this.http_req==null ) return false;

		if( method != 'POST' && parameters != null )
			url = url + '?' + parameters;
		try{
			this.http_req.open( method, url, true );
			if( method == 'POST' )
				this.http_req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

			this.http_req.onreadystatechange = callback  ;
			if( method == 'POST' )
				this.http_req.send( parameters );
			else
				this.http_req.send( null );
		}catch(e){
	  		this.msg(dj(async_class_js_t1));
	  		return false;
		}
		return true;
	}

	this.msg = function( str )
	{
		if( this.show_err && str !='' )
			alert( str );
	}

}

function async_iframe_class( frame_id, show_err )
{
	this.show_err = show_err ;
	this.frame_id = frame_id ;

	this.doGet = function( url, parameters )
	{
		var obj = document.getElementById(this.frame_id);
		var myurl = url;
		if( parameters != null ) myurl += '?'+parameters;

		//this.msg('URL: 1'+ myurl)
			//this.treeUpdating=true;
		if( obj != null )
			obj.src = myurl ;
		else{
			this.msg('frame is null');
			return false;
		}
		return true;
	}

	this.drawFrame = function( visible )
	{
		document.write('<iframe id="'+this.frame_id+'"');
		if( !visible ) document.write(' style="display: none;"');
		document.write('></iframe>');
	}

	this.msg = function( str )
	{
		if( this.show_err && str !='' )
			alert( str );
	}

}

/*
function onReadyStateChangeSample()
{
	// 0 not start yet
	// 1 reading
	// 2 read done
	// 3 data exchange
	// 4 done
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			//http_request.responseText
			//http_request.responseXML
			//var xmldoc = http_request.responseXML;
			//var root_node = xmldoc.getElementsByTagName('root').item(0);
			//alert(root_node.firstChild.data);
		} else {
			alert('Fail, status:'+ http_request.status );

		}
	} else {

	}
}*/
