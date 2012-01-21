package com.beanbutton;

import com.phonegap.*;

import android.app.Activity;
import android.os.Bundle;

public class MeMCardActivityMainApp extends DroidGap {

	private static final String url = "file:///android_asset/www/index.html";

	/** Called when the activity is first created. */
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		super.loadUrl(url);
	}
}