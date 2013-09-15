package com.example.homebrain1;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;
import android.widget.ToggleButton;

public class Control extends Activity {

	ToggleButton kitchen,lounge,garage,parents,children,radio,tv;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.control);
		kitchen=(ToggleButton) findViewById(R.id.cmdKitchen);
		lounge=(ToggleButton) findViewById(R.id.cmdLouge);
		garage=(ToggleButton) findViewById(R.id.cmdGarage);
		parents=(ToggleButton) findViewById(R.id.cmdParents);
		children=(ToggleButton) findViewById(R.id.cmdChildren);
		radio=(ToggleButton) findViewById(R.id.cmdRadio);
		tv=(ToggleButton) findViewById(R.id.cmdTV);
	}
	
	//////LOUGE CONTROL LIGHTS
	
	public void LoungeControl(View v)
	{
		if (lounge.isChecked())
		{
			Toast toast = Toast.makeText(this, "Lounge Control Activated", Toast.LENGTH_SHORT);
        	toast.show();
		}
	}
	
	//////KITCHEN CONTROL LIGHTS
	public void KitchenControl(View v)
	{
		if (kitchen.isChecked())
		{
			Toast toast = Toast.makeText(this, "Kitchen Control Activated", Toast.LENGTH_SHORT);
        	toast.show();
		}
	}
	
	//////GARAGE CONTROL DOOR
	public void GarageControl(View v)
	{
		if (garage.isChecked())
		{
			Toast toast = Toast.makeText(this, "Garage Control Activated", Toast.LENGTH_SHORT);
      	toast.show();
		}
	}
	
	//////PARENTS BEDROOM CONTROL LIGHTS
	public void ParentsControl(View v)
	{
		if (parents.isChecked())
		{
			Toast toast = Toast.makeText(this, "Parents Control Activated", Toast.LENGTH_SHORT);
      	toast.show();
		}
	}
	
	//////CHILDREN BEDROOM CONTROL LIGHTS
	public void ChildrenControl(View v)
	{
		if (children.isChecked())
		{
			Toast toast = Toast.makeText(this, "Children Control Activated", Toast.LENGTH_SHORT);
      	toast.show();
		}
	}
	
	//////RADIO CONTROL
	public void RadioControl(View v)
	{
		if (radio.isChecked())
		{
			Toast toast = Toast.makeText(this, "Radio Control Activated", Toast.LENGTH_SHORT);
      	toast.show();
		}
	}
	
	//////TV CONTROL
	public void TVControl(View v)
	{
		if (tv.isChecked())
		{
			Toast toast = Toast.makeText(this, "TV Control Activated", Toast.LENGTH_SHORT);
      	toast.show();
		}
	}
	
	
	
	

}
