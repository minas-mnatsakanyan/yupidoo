<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 12:24:11
         compiled from "C:\xampp-portable\htdocs\yupido\themes\Yupido\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25900577ab579c26cf8-88142303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d3ffcc0623cf9b9e188529ead7e00746b3c215' => 
    array (
      0 => 'C:\\xampp-portable\\htdocs\\yupido\\themes\\Yupido\\index.tpl',
      1 => 1467733501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25900577ab579c26cf8-88142303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577ab579d539b6_53336941',
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'cart' => 0,
    'link' => 0,
    'static_token' => 0,
    'cart_qties' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577ab579d539b6_53336941')) {function content_577ab579d539b6_53336941($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (!isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<script src="//cdn.rawgit.com/nnattawat/flip/v1.0.18/dist/jquery.flip.min.js"></script>
<div class="container-fluid">
<img  style="display:none; width:100%;"  src="/yupido/img/cards.gif">
<div style="display:none; width:100%;">
	<div class="col-lg-12"  style="/*width: 98%; margin:0 auto;*/"  id="choose_cart" >
</div>
</div>
<div class="col-md-12 col-lg-12 text-center" >
	<div class="count_down" style="padding-top:0px; padding-bottom:10px;">
		<ul  class="countdown" id="countdown">
		  <li  class="count_down_li"  id="days">
			<div class="number">00</div>
			<div class="label">Days</div>
		  </li>
		  <li  class="count_down_li"  id="hours">
			<div class="number">00</div>
			<div class="label">Hours</div>
		  </li>
		  <li class="count_down_li" id="minutes">
			<div class="number">00</div>
			<div class="label">Minutes</div>
		  </li>
		  <li  class="count_down_li"  id="seconds">
			<div class="number">00</div>
			<div class="label">Seconds</div>
		  </li>
		</ul>
	</div>
</div>


<div class="col-lg-12 col-md-10 col-xs-10 text-center" style=" overflow: auto; min-height:100%; margin:0 auto; float:none;">

  <div class="col-lg-2 col-xs-12 fl_none"  data-c_n="100"><div class="obl"></div></div>
  <div class="col-lg-2 col-xs-12 fl_none cent" data-c_n="101"><div class="obl"></div></div>
  <div class="col-lg-2 col-xs-12 fl_none" data-c_n="102"><div class="obl"></div></div>
  <div class="col-lg-2 col-xs-12 fl_none cent" data-c_n="103"><div class="obl"></div></div>
  <div class="col-lg-2 col-xs-12 fl_none" data-c_n="104"><div class="obl"></div></div>
  <div class="col-lg-2 col-xs-12 fl_none cent" data-c_n="105"><div class="obl"></div></div>
  <div class="col-lg-2 col-xs-12  fl_none" data-c_n="106"><div class="obl"></div></div>
</div>
<div class="col-lg-1 col-md-1 col-xs-1" >&nbsp;</div>

	<div class="col-md-12 col-lg-12 col-xs-12" >
		<p>
		  <button type="button" class="btn btn-primary btn_random">Random <span class="rand glyphicon glyphicon-random"></span><?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->nbProducts(), null, 0);?></button>
		</p>
	</div>
	<div class="text-center col-lg-12 col-md-12 col-xs-12 text-center">
	<div style="width:100%; max-width:945px; margin: 0 auto; color:#6C5453 ">
		You can choose more combinations by clicking Add Another button 
		For more info please <a href='#'>click here</a>
	</div>
	</div><br>
	<div class="col-md-12 col-xs-12" >&nbsp;</div>

	  <!--<button type="button" class="btn btn-success btn-lg btn_submit">Submit</button>-->
	<?php if ($_smarty_tpl->tpl_vars['cart']->value->nbProducts()>=1) {?>
		<div class="col-md-6 col-lg-6 col-xs-6 text-right" >
			<a class="btn  btn-info ajax_add_to_cart_button btn btn-default btn-lg play_more" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart.php');?>
?add=1&amp;id_product=8&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
" rel="nofollow"  data-id-product="8" data-minimal_quantity="1">
				<span>Add Another</span>
			</a><br>
		</div>
		<div class="col-md-6 col-lg-6 col-xs-6 text-left" >
			<a class="btn btn-success btn-lg btn_submit"  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'SUBMIT','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'homefeatured'),$_smarty_tpl);?>
 ( <span class="ajax_cart_quantity"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span> )</a><br>
		</div>
	<?php } else { ?>
		<div class="col-md-6 col-lg-6 col-xs-6 text-right" >
			<a class="btn btn-info ajax_add_to_cart_button btn btn-default btn-lg play_more" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart.php');?>
?add=1&amp;id_product=8&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
" rel="nofollow"  data-id-product="8" data-minimal_quantity="1">
				<span>Add Another</span>
			</a><br>
		</div>	
		<div class="col-md-6 col-lg-6 col-xs-6 text-left" >		
			<a class=" ajax_add_to_cart_button2 btn btn-success btn-lg btn_submit" rel="ajax_id_product_<?php echo 8;?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart.php');?>
?qty=1&amp;id_product=<?php echo 8;?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'homefeatured'),$_smarty_tpl);?>
 ( <span class="ajax_cart_quantity"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span> )</a><br>
		</div>
		 <!--<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order.php',true);?>
" id="button_large"rel="nofollow">CHECKOUT</a>-->
<?php }?>


</div>

<div id="footer" class="col-md-12 col-lg-12 col-xs-12 text-center " >
<div class="col-lg-9 col-md-8 col-xs-8 text-left honest_control">
<span class="honest_control_caption">Honest Control </span>: c886944b83b9ebdc9fa912669eaea97a  

<small class="whatisthis"><a href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make">What is this?</a></small>

<p style="text-align:left; padding-top:10px"><span class="honest_control_caption">Decoded Honest Control For Previous Week </span>: (s3, a4, qs, sd, d4, g4, h7) Server Key=njken213l4jk2134kl21j43km12</p>
</div>

</div>

<?php if (!isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?>


<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	var cards_choosen=new Array();
	var choosen_tmp, selected;
	var cards=new Array();
	var c_height, c_width;
	
	c_height=188;
	c_width=130;


 function get_Y(x){
	if(x>=0 && x<13)
		return 0;
	if(x>=13 && x <26)
		return 1;
	if(x>=26 && x <39)
		return 2;
	if(x>=39 )
		return 3;
 }

 function get_X(n){
	if(n==0) return n;
	if(n>0 && n<13)
		return n;
	if(n>=13 && n <26)
		return n-13;
	if(n>=26 && n <39)
		return n-26;
	if(n>=39 )
		return n-39;
 }

 function random_is_unique(random_num_, array_) {
    for(i = 0; i < array_.length; i++) {
        if(array_[i] == random_num_) {
            return false;
        }                        
    }
    return true;
 }

 function rotate_horizontal(elem,x,y){
	elem.addClass("translateAnimationClass");
	elem.stop().animate({   
					transform: 720,  
				},  
				{  
					//duration: 900,  
					step: function(now, fx) { 
						if (fx.prop == "transform") { 
							if (now >= 720) {  // rotate and fade in when image already rotated 360deg     
								elem.removeClass("translateAnimationClass");
								$(this).css({  
										'opacity': now / 720 , 
											'background-position':	"-"+ x +'px' +' '+ "-"+y+'px',											
											});
											elem.empty();
							}
						}  
					}  
			});
			
 }


	for(var c=0; c<52; c++){
		var d_class="";
		if(cards_choosen.length && !random_is_unique(c,cards_choosen)){
			d_class='no_drop';
		}
		var x=100*get_X(c);
		var y=145*get_Y(c);
		var single_cart='<div class="single_cart '+d_class+'" id="c_'+c+'"  style="background-position:-'+x+'px -'+y+'px'+';"></div>'
		$('#choose_cart').append(single_cart);
	}



	$('.fl_none').click(function(){
		$('.single_cart').removeClass('choosen');
		choosen_tmp=$(this).data('c_n');
		selected=$(this);
		//console.log(choosen_tmp);
		$.fancybox.open({ href : '#choose_cart',});
	})

	$('.single_cart:not(".no_drop")').live('click',function(){
		var n=$(this).attr('id').replace('c_','');
		//var selected=$("[data-c_n="+choosen_tmp+"]");
		var x=c_width*get_X(n);
		var y=c_height*get_Y(n);
		
		$('#c_'+choosen_tmp).removeClass('no_drop');
		$('.choosen').removeClass('no_drop');
		$('.single_cart').removeClass('choosen');
		$(this).addClass('choosen');
		$(this).addClass('no_drop');

		
		selected.data('c_n',n).attr('data-c_n',n);
		$.fancybox.close();
		rotate_horizontal(selected,x,y);
		
	})

	$(".no_drop").live('click',function(){
		//$.fancybox.close();
	})
	

					   
	$(".btn_random").click(function(){
		cards=[];
		cards_choosen=[];
		var c_n_x, c_n_y ;
			$(".fl_none:not('.cent')").each(function(){
				var trig=true;
				var current_cart=$(this);
				c_n_x=Math.floor((Math.random() * 52));
				if(c_n_x==52){c_n_x=51;}
				if(random_is_unique(c_n_x, cards)){
					cards.push(c_n_x);
				}
				while(!random_is_unique(c_n_x, cards)){
					c_n_x=Math.floor((Math.random() * 52));
					if(c_n_x==52){c_n_x=51;}
					if (random_is_unique(c_n_x, cards)) { 
						cards.push(c_n_x);
						trig=false;
						break;
					}
				} 
				var c_n_y=get_Y(c_n_x);
				var c_n_x_p=get_X(c_n_x);
				
				c_n_y=c_n_y*c_height;
				c_n_x_p=c_n_x_p*c_width;
				
				cards_choosen.push(c_n_x);
				$(this).data('c_n',c_n_x).attr('data-c_n',c_n_x);
				current_cart.addClass("translateAnimationClass");
				$(this).stop().animate({  
					transform: 720,  
				},  
				{  
					//duration: 900,  
					step: function(now, fx) { 
						if (fx.prop == "transform") { 
							if (now >= 720) {  // rotate and fade in when image already rotated 360deg     
								current_cart.removeClass("translateAnimationClass");
								$(this).css({  
									'opacity': now / 720 , 
									'background-position':	"-"+ c_n_x_p +'px' +' '+ "-"+c_n_y+'px',											
								})
							}  
						}  
					}  
				});  
			});
		$(".cent").each(function(){
			var trig=true;
			var current_cart=$(this);
			c_n_x=Math.floor((Math.random() * 52));
			if(c_n_x==52){c_n_x=51;}
			if(random_is_unique(c_n_x, cards)){
				cards.push(c_n_x);
			}
			while(!random_is_unique(c_n_x, cards)){
				c_n_x=Math.floor((Math.random() * 52));
				if(c_n_x==52){c_n_x=51;}
				if (random_is_unique(c_n_x, cards)) { 
					cards.push(c_n_x);
					trig=false;
					break;
				}
			} 
			
			var c_n_y=get_Y(c_n_x);
			var c_n_x_p=get_X(c_n_x);
			
			c_n_y=c_n_y*c_height;
			c_n_x_p=c_n_x_p*c_width;
			
			cards_choosen.push(c_n_x);
			current_cart.addClass("translateAnimationClass2");
			$(this).data('c_n',c_n_x).attr('data-c_n',c_n_x);
			$(this).stop().animate({  
					transform: 1440,  
				},  
				{  
					//duration: 900,  
					step: function(now, fx) {  
						if (fx.prop == "transform") {  
							if (now >=1440) {  // rotate and fade in when image already rotated 360deg   
								current_cart.removeClass("translateAnimationClass2");							
								$(this).css({  
									'opacity': now / 1440 ,
									'background-position':	"-"+ c_n_x_p+'px' +' '+ "-"+c_n_y+'px',
								});
								$('.fl_none').empty();
							}							
						}
					}
			}); 
		});
		$('#choose_cart').empty();
		for(var c=0; c<52; c++){
			var d_class="";
			if(!random_is_unique(c,cards_choosen)){
				d_class='no_drop';
			}
			var x=100*get_X(c);
			var y=145*get_Y(c);
			var single_cart='<div class="single_cart '+d_class+'" id="c_'+c+'"  style="background-position:-'+x+'px -'+y+'px'+';"></div>'
			$('#choose_cart').append(single_cart);
		}
	});


</script>



<?php }} ?>
