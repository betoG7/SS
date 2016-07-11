using UnityEngine;
using UnityEngine.UI;
using System.Collections;

public class ButtonScript : MonoBehaviour {

	public Text countText;

	public InputField IText;

	private string ome;


	public string[] items;


	IEnumerator Start () 
	{
		ome = "";




		WWW itemsData = new WWW ("http://localhost/SS/dbconn/conn.php");

		yield return itemsData;
		string itemsDataString = itemsData.text;
		print (itemsDataString);
		items = itemsDataString.Split (';');
		print (GetDataValue(items [1], "id:"));
	}

	string GetDataValue(string data, string index)
	{
		string value = data.Substring (data.IndexOf(index)+index.Length);	
		if(value.Contains("|"))
		{
			value = value.Remove(value.IndexOf("|"));
		}
			
		return value;
	}


	
	// Update is called once per frame
	void Update () 
	{
		
	}

	public void onClick()
	{
		// Save game data
		ObMen ();
		PrMen ();
		// Close game
		//scriptMain.Log ("Application Closing");
		//Application.Quit ();
	}


	void ObMen()
	{
		ome = IText.text;
	}

	void PrMen ()
	{
		countText.text = ome;
	}
}
