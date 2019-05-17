jQuery(document).ready(function()
{
	var mobile_open = false;
	jQuery(".mobile-opener a").click(function()
	{
			if(mobile_open === false)
			{
				jQuery(".mobile-menu").css("display","initial");
				mobile_open = true;
			}
			else
			{
				jQuery(".mobile-menu").css("display","none");
				mobile_open = false;
			}
	});


	jQuery('.mobile-menu > li > a').click(function()
	{
    	if (jQuery(this).attr('class') != 'active')
    	{
      		jQuery('.mobile-menu li ul').slideUp();
      		jQuery(this).next().slideToggle();
      		jQuery('.mobile-menu li a').removeClass('active');
      		jQuery(this).addClass('active');
    	}
  	});

  	jQuery('.list-cat-mobile  > li > .mob-cat-title').click(function()
  	{
    	if (jQuery(this).attr('class') != 'active')
    	{
      		jQuery('.list-cat-mobile  li ul').slideUp();
      		jQuery(this).next().slideToggle();
      		jQuery('.list-cat-mobile  li .mob-cat-title').removeClass('active');
     		jQuery(this).addClass('active');
    	}    	
 	});
 	jQuery('.list-cat-mobile  > li > ul > li > .mob-cat-subtitle').click(function()
  	{
    	if (jQuery(this).attr('class') != 'active')
    	{
      		jQuery('.list-cat-mobile  li ul > li > ul').slideUp();
      		jQuery(this).next().slideToggle();
      		jQuery('.list-cat-mobile  li .mob-cat-subtitle').removeClass('active');
     		jQuery(this).addClass('active');
    	}    	
 	});
	
});
