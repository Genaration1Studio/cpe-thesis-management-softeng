function fun_show() 
{
var select_status=$('#fact_name').val();
	if(select_status == '1500') 
	{ 
		$('#dapt_name_se').hide();
		$('#dapt_bs').show();
		$('#dapt_sci').hide();
		$('#dapt_art').hide();
		$('#dapt_ea').hide();

	} 
	else if(select_status == '1600')
	{ 

		$('#dapt_name_se').hide();
		$('#dapt_bs').hide();
		$('#dapt_sci').show();
		$('#dapt_art').hide();
		$('#dapt_ea').hide();
	}
	else if(select_status == '1800')
	{ 

		$('#dapt_name_se').hide();
		$('#dapt_bs').hide();
		$('#dapt_sci').hide();
		$('#dapt_art').show();
		$('#dapt_ea').hide();
		
	}
	else if(select_status == '1700')
	{ 

		$('#dapt_name_se').hide();
		$('#dapt_bs').hide();
		$('#dapt_sci').hide();
		$('#dapt_art').hide();
		$('#dapt_ea').show();
	}
	else 
	{ 
		$('#dapt_name_se').show();
		$('#dapt_bs').hide();
		$('#dapt_sci').hide();
		$('#dapt_art').hide();
		$('#dapt_ea').hide();
		 
	}
}