
menunum=0;menus=new Array();_d=document;function addmenu(){menunum++;menus[menunum]=menu;}function dumpmenus(){mt="<script language=javascript>";for(a=1;a<menus.length;a++){mt+=" menu"+a+"=menus["+a+"];"}mt+="<\/script>";_d.write(mt)}

if(navigator.appVersion.indexOf("MSIE 6.0")>0)
{
	effect = "GradientWipe(duration=0.5);Alpha(style=0,opacity=90);Shadow(color='#777777', Direction=135, Strength=5)"
}
else
{
	effect = "Shadow(color='#777777', Direction=135, Strength=5)" // Stop IE5.5 bug when using more than one filter
}


timegap=500			// The time delay for menus to remain visible
followspeed=5		// Follow Scrolling speed
followrate=40		// Follow Scrolling Rate
suboffset_top=10;	// Sub menu offset Top position 
suboffset_left=10;	// Sub menu offset Left position

style0=[			// style0 is an array of properties. You can have as many property arrays as you need. This means that menus can have their own style.
"FFFFFF",				// Mouse Off Font Color
"A8B9CD",			// Mouse Off Background Color
"425367",			// Mouse On Font Color
"A8B9CD",			// Mouse On Background Color
"425367",//"a3b4d5",			// Menu Border Color 
10,					// Font Size in pixels
"normal",			// Font Style (italic or normal)
"bold",				// Font Weight (bold or normal)
"Verdana",	// Font Name
1,					// Menu Item Padding
"",		// Sub Menu Image (Leave this blank if not needed)
3,					// 3D Border & Separator bar
"A8B9CD",			// 3D High Color
"A8B9CD",			// 3D Low Color
,			// Current Page Item Font Color (leave this blank to disable)
,				// Current Page Item Background Color (leave this blank to disable)
"",		// Top Bar image (Leave this blank to disable)
"ffffff",			// Menu Header Font Color (Leave blank if headers are not needed)
"000099",			// Menu Header Background Color (Leave blank if headers are not needed)
"FFFFFF",			// Menu Item Separator Color
]

style1=[			// style1 is an array of properties. You can have as many property arrays as you need. This means that menus can have their own style.
"425367",				// Mouse Off Font Color
"A8B9CD",			// Mouse Off Background Color
"FFFFFF",			// Mouse On Font Color
										"7086A0",			// Mouse On Background Color
"425367",			// Menu Border Color 
10,					// Font Size in pixels
"normal",			// Font Style (italic or normal)
"bold",				// Font Weight (bold or normal)
"Verdana",	// Font Name
4,					// Menu Item Padding
"",		// Sub Menu Image (Leave this blank if not needed)
5,					// 3D Border & Separator bar
"425367",			// 3D High Color
"425367",			// 3D Low Color
,			// Current Page Item Font Color (leave this blank to disable)
,				// Current Page Item Background Color (leave this blank to disable)
"",		// Top Bar image (Leave this blank to disable)
"ffffff",			// Menu Header Font Color (Leave blank if headers are not needed)
"000099",			// Menu Header Background Color (Leave blank if headers are not needed)
"ffffff",//"a3b4d5",			// Menu Item Separator Color
]


addmenu(menu=[		// This is the array that contains your menu properties and details
"mainmenu",			// Menu Name - This is needed in order for the menu to be called
2,					// Menu Top - The Top position of the menu in pixels
542,			// Menu Left - The Left position of the menu in pixels
70
,					// Menu Width - Menus width in pixels
2,					// Menu Border Width 
,					// Screen Position - here you can use "center;left;right;middle;top;bottom" or a combination of "center:middle"
style0,				// Properties Array - this is set higher up, as above
1,					// Always Visible - allows the menu item to be visible at all time (1=on/0=off)
"left",				// Alignment - sets the menu elements text alignment, values valid here are: left, right or center
,				,"&nbsp;&nbsp;&nbsp;Masters&nbsp;&nbsp;&nbsp;&nbsp;","show-menu=Masters",,"Masters",1 	
,"&nbsp;&nbsp;&nbsp;Trips&nbsp;&nbsp;&nbsp;&nbsp;","show-menu=Trips",,"Trips",1
,"&nbsp;&nbsp;&nbsp;Other&nbsp;&nbsp;&nbsp;&nbsp;","show-menu=Other",,"Other",1
])

//*******************************************************************
//Masters menu  ****************************************************
//*******************************************************************

	addmenu(menu=["Employee",
	,,133,1,"",style1,,"left",effect,,,,,,,,,,,,
	,"Holiday","insert_holiday_form.php",,"Holiday",0
	,"Vehicle","insert_bus_form.php",,"Bus",0
	,"Location","insert_location_form.php",,"Location",0	
//	,"Agency","insert_agency_form.php",,"Agency",0
//	,"Non-Employee","insert_non_employee_form.php",,"Non-Employee",0
	])



addmenu(menu=["Trips",
	,,130,1,"",style1,,"left",effect,,,,,,,,,,,,
//		,"Add Daily Trip","insert_daily_trip_form.php",,"Add Daily Trip",0
//		,"Add Weekly Trip","insert_weekly_trip_form.php",,"Add Weekly Trip",0
//		,"Add Holiday Trip","insert_holiday_trip_form.php",,"Add Holiday Trip",0
//		,"Add Special Trip","insert_special_trip_form.php",,"Add Special Trip",0
		,"Add Trip Master","insert_trip_master_form.php",,"Add Trip Master",0
		,"Add New Trip","trip_addnew.php",,"Add Additional Trip",0
		,"Update/Cancel Trip","trip_cancellation_options.php",,"Update/Cancel Trip",0
		,"Add/Update Local Trip","edit_local_trip.php",,"Add/Update Local Trip",0
		,"Generate Trip Schedules","trip_schedule_generation_form.php",,"Generate Trip Schedules",0

//		,"Suspend Bookings","suspend_trips_form.php",,"Suspend Bookings",0
//		,"Activate Bookings","activate_trips_form.php",,"Activate Bookings",0
	])


//*******************************************************************
//Booking Menu****************************************************
//*******************************************************************

/*	addmenu(menu=["Booking",
	,,160,1,"",style1,,"left",effect,,,,,,,,,,,,
	,"Book Tickets","ticket_booking_options.php",,"Book Tickets",0
	,"Cancel/Releive Booking","ticket_cancellation_options.php",,"Cancel/Releive Booking",0
	])*/
	//*******************************************************************
//Other  ****************************************************
//*******************************************************************

	addmenu(menu=["Other",
	,,130,1,"",style1,,"left",effect,,,,,,,,,,,,
	,"Reset Employee Password","pass_reset.php",,"Reset Employee Password",0
	,"Suspend/Activate Booking","suspend_bookings_form.php",,"Suspend/Activate Bookings",0
	,"Update Pay Status","update_employee_mapping_form.php",,"Update Pay Status",0
	,"Update Location","update_location_form.php",,"Update Location",0
//	,"Transfer Employee Data","transfer_employee_data.php",,"Transfer Employee Data",0
//	,"Backup Database","backup_form.php",,"Backup Database",0
	])

	//*******************************************************************
//Reports ****************************************************
//*******************************************************************
/*	addmenu(menu=["Reports",
	,,170,1,"",style1,,"left",effect,,,,,,,,,,,,
	,"Trip Sheet","trip_sheet_report_form.php",,"Trip Sheet",0
	,"Agency-wise Report","agency_report_form.php",,"Agency-wise Report",0
	,"Trips Summary Report","trips_summary_report_form.php",,"Trips Summary Report",0
	,"Employee Deduction Report","deductions_report_form.php",,"Employee Deduction Report",0
//	,"Trips Report","trip_sheet_report_form.php",,"Trips Report",0

	
	])*/

	






dumpmenus()
