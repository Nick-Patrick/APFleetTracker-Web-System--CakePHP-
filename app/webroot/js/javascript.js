$(document).ready(function(){

	initTimePickers();

	    $('#modalCancelButton').click(function(){
	    	resetCollectionForm();
    		$('#modalPopup').addClass('close-reveal-modal');
 		});

 		$('#modalPackageCancelButton').click(function(){
	    	resetPackageForm();
    		$('#modalPackagePopup').addClass('close-reveal-modal');
 		});

 		$('#modalJobDriverCancelButton').click(function(){
 			$('#assignJobModal').addClass('close-reveal-modal');
 		});

 		$('#createPackageButton').click(function(){
 			$('#modalPackagePopup').removeClass('close-reveal-modal');
 		});

		$('#addLocationButton').click(function(){
    	    $('#modalPopup').removeClass('close-reveal-modal');
    	}); 
    	$('#addLocationButton2').click(function(){
    	    $('#modalPopup').removeClass('close-reveal-modal');
    	});   

    	$('#assignJobNowButton').click(function(){
    		$('#assignJobModal').removeClass('close-reveal-modal');
    	});

		ajaxAddLocation();
		ajaxAddPackage();
    	getLocationDetails();
    	getPackageDetails();
    	

    	$('#JobCollectionId').change(function(){
			var collectionId = $(this).val();
			updateLocationDetails(collectionId,locationR);
		});

    	$('#JobDropoffId').change(function(){
			var dropoffId = $(this).val();
			updateDropoffDetails(dropoffId,locationR);
		});

    	$('#packageSelect').change(function(){
    		var packageId = $(this).val();
    		updatePackageDetails(packageId,allPackages);
    	});

    	$('#addPackageToList').click(function(){
    		addPackageToList();
    	});

    	$('#removePackageFromList').click(function(){
    		removePackageFromList();
    	});

    	$('#assignLaterJob').click(function(){
    		$('#JobPackagePackageId option').prop('selected',true);
    	});

    	$('#modalJobDriverAssignButton').click(function(){
    		assignJobDriver();
    	});

});

var allPackages;
var locationR; //allLocations
var allLocations = locationR;

function updateLocationDetails(collectionId, locationResult){
	$.each(locationResult.allLocations, function(i,v){
        		if(v.Location.id == collectionId){
        			$('#collection_name').html(v.Location.name);
        			$('#collection_address1').html(v.Location.address1);
        			$('#collection_address2').html(v.Location.address2);
        			$('#collection_address3').html(v.Location.address3);
        			$('#collection_town').html(v.Location.town);
        			$('#collection_county').html(v.Location.county);
        			$('#collection_postcode').html(v.Location.town);
        			$('#collection_telephone').html(v.Location.telephone);
        			$('#mon').html(v.LocationOpeningTime[0].monday_open);
        			$('#mon_c').html(v.LocationOpeningTime[0].monday_close);
        			$('#tues').html(v.LocationOpeningTime[0].tuesday_open);
        			$('#tues_c').html(v.LocationOpeningTime[0].tuesday_close);
        			$('#wed').html(v.LocationOpeningTime[0].wednesday_open);
        			$('#wed_c').html(v.LocationOpeningTime[0].wednesday_close);
        			$('#thur').html(v.LocationOpeningTime[0].thursday_open);
        			$('#thur_c').html(v.LocationOpeningTime[0].thursday_close);
        			$('#fri').html(v.LocationOpeningTime[0].friday_open);
        			$('#fri_c').html(v.LocationOpeningTime[0].friday_close);
        			$('#sat').html(v.LocationOpeningTime[0].saturday_open);
        			$('#sat_c').html(v.LocationOpeningTime[0].saturday_close);
        			$('#sun').html(v.LocationOpeningTime[0].sunday_open);
        			$('#sun_c').html(v.LocationOpeningTime[0].sunday_close);
        		}
        	});
}

function updateDropoffDetails(dropoffId, locationResult){
	$.each(locationResult.allLocations, function(i,v){
        		if(v.Location.id == dropoffId){
        			$('#dropoff_name').html(v.Location.name);
        			$('#dropoff_address1').html(v.Location.address1);
        			$('#dropoff_address2').html(v.Location.address2);
        			$('#dropoff_address3').html(v.Location.address3);
        			$('#dropoff_town').html(v.Location.town);
        			$('#dropoff_county').html(v.Location.county);
        			$('#dropoff_postcode').html(v.Location.town);
        			$('#dropoff_telephone').html(v.Location.telephone);
        			$('#d_mon').html(v.LocationOpeningTime[0].monday_open);
        			$('#d_mon_c').html(v.LocationOpeningTime[0].monday_close);
        			$('#d_tues').html(v.LocationOpeningTime[0].tuesday_open);
        			$('#d_tues_c').html(v.LocationOpeningTime[0].tuesday_close);
        			$('#d_wed').html(v.LocationOpeningTime[0].wednesday_open);
        			$('#d_wed_c').html(v.LocationOpeningTime[0].wednesday_close);
        			$('#d_thur').html(v.LocationOpeningTime[0].thursday_open);
        			$('#d_thur_c').html(v.LocationOpeningTime[0].thursday_close);
        			$('#d_fri').html(v.LocationOpeningTime[0].friday_open);
        			$('#d_fri_c').html(v.LocationOpeningTime[0].friday_close);
        			$('#d_sat').html(v.LocationOpeningTime[0].saturday_open);
        			$('#d_sat_c').html(v.LocationOpeningTime[0].saturday_close);
        			$('#d_sun').html(v.LocationOpeningTime[0].sunday_open);
        			$('#d_sun_c').html(v.LocationOpeningTime[0].sunday_close);
        		}
        	});
}

function updatePackageDetails(packageId, packageResult){
	$.each(packageResult.packages, function(i,v){
        		if(v.Package.id == packageId){
        			$('#package_name').html(v.Package.name);
        			$('#package_length').html(v.Package.length);
        			$('#package_width').html(v.Package.width);
        			$('#package_height').html(v.Package.height);
        			$('#package_weight').html(v.Package.weight);
        			$('#package_reqs').html(v.Package.special_reqs);

        			
        		}
        	});
}


function getLocationDetails(){

	$.ajax({
       type: 'GET',
        async: true,
        global: 'false',
        url: '/apTracker/locations/index.json',
        headers: {Accept: 'application/json'},
        dataType: 'json',
        success: function(locationResult){
        	locationR = locationResult;
        	return false;
        }
    });
}

function getPackageDetails(){

	$.ajax({
       type: 'GET',
        async: true,
        global: 'false',
        url: '/apTracker/packages/index.json',
        headers: {Accept: 'application/json'},
        dataType: 'json',
        success: function(packageResults){
        	allPackages = packageResults;
        	return false;
        }
    });
}

function initTimePickers(){
		$('#monday_open').timepicker();
		$('#monday_close').timepicker();
		$('#tuesday_open').timepicker();
		$('#tuesday_close').timepicker();
		$('#wednesday_open').timepicker();
		$('#wednesday_close').timepicker();
		$('#thursday_open').timepicker();
		$('#thursday_close').timepicker();
		$('#friday_open').timepicker();
		$('#friday_close').timepicker();
		$('#saturday_open').timepicker();
		$('#saturday_close').timepicker();
		$('#sunday_open').timepicker();
		$('#sunday_close').timepicker();
}



function ajaxAddLocation(){
		$('#AddCollectionForm').on('submit',(function(e){
				
				if($('#modalPopup div.error').length > 0){
					console.log("no");
					console.log($('#modalPopup div.error').length);
					return false;
				}
				
				else {
					var formData = $(this).serializeArray();
					var formUrl = $(this).attr('action');
					console.log(formData[0].value);
					console.log($('#LocationId'));
					if($('#JobCollectionId option:first-child')[0].value){
							var lastOptionId = $('#JobCollectionId option:first-child')[0].value;
							newOptionId = ++lastOptionId;
						}
					console.log(formData);
					$.ajax({
					type:'POST',
					url:formUrl,
					data:formData,
					success:function(data,textStatus,xhr){
	
						
							console.log("hello");
							console.log($('#modalPopup div.error').length);
							$('#modalPopup').addClass('close-reveal-modal');
							$('#modalPopup').trigger("click");
							if(newOptionId){
									$('#JobCollectionId').prepend($('<option>', {
										value: newOptionId,
										text: formData[0].value
									}));
									$('#JobDropoffId').prepend($('<option>', {
										value: newOptionId,
										text: formData[0].value
									}));
							}
							console.log(formData);
							locationResult = getLocationDetails();
							resetCollectionForm();
						
					},
					error: function(xhr,textStatus,error){
						console.log("error: " + textStatus);
					}
						});

						return false;
				}
			}));
		
	
}

function ajaxAddPackage(){

		$('#AddPackageForm').on('submit',(function(e){
				
				if($('#modalPackagePopup div.error').length > 0){
					console.log("no");
					console.log($('#modalPackagePopup div.error').length);
					return false;
				}
				
				else {
					var formData = $(this).serializeArray();
					var formUrl = $(this).attr('action');
					console.log(formData[0].value);
					var lastOptionId = $('#packageSelect option:first-child')[0].value;
					newOptionId = ++lastOptionId;
					$.ajax({
					type:'POST',
					url:formUrl,
					data:formData,
					success:function(data,textStatus,xhr){
							
						console.log("hello");
						console.log($('#modalPackagePopup div.error').length);
						$('#modalPackagePopup').addClass('close-reveal-modal');
						$('#modalPackagePopup').trigger("click");
						$('#packageSelect').prepend($('<option>', {
							value: newOptionId,
							text: formData[0].value
						}));

						allPackages = getPackageDetails();
						resetPackageForm();
						
					},
					error: function(xhr,textStatus,error){
						console.log("error: " + textStatus);
					}
						});

						return false;
				}
			}));
			
}

function resetCollectionForm(){
    var resetForms = function () {
        $('#AddCollectionForm').each(function() {
            this.reset();
        });
    };

    resetForms();

    window.onbeforeunload = resetForms;
}

function resetPackageForm(){
    var resetForms = function () {
        $('#AddPackageForm').each(function() {
            this.reset();
        });
    };

    resetForms();

    window.onbeforeunload = resetForms;
}

function addPackageToList(){
	console.log($('#packageSelect').val());
	console.log($('#packageSelect option:selected').text());
	$('#JobPackagePackageId').prepend($('<option>', {
							value: $('#packageSelect').val(),
							text: $('#packageSelect option:selected').text()
	}));
event.preventDefault();
}

function removePackageFromList(){
	$('#JobPackagePackageId option:selected').remove();
	event.preventDefault();
}

function assignJobDriver(){
	//event.preventDefault();

	var assignedDriver = $('#DriverVehicleJob option:selected')[0].text;
	var assignedVehicle = $('#DriverVehicleJobVehicleId option:selected')[0].text;
	console.log(assignedDriver);
	$('#assignedDriver').html(assignedDriver);
	$('#assignedVehicle').html(assignedVehicle);
	$('#assignedDriverId').val($('#DriverVehicleJob option:selected')[0].value);
	$('#assignedVehicleId').val($('#DriverVehicleJobVehicleId option:selected')[0].value);
	$('#assignLaterJob').html("Save and Assign Job");
	$('#assignJobNowButton').html('Change Driver');
	$('#assignLaterJob').css('background','#5da423');
	$('#assignJobModal').addClass('close-reveal-modal');
}