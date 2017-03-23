using UnityEngine;
using System.Collections;

public class UserName : MonoBehaviour {

    public TextMesh username; 

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
	}

    void MyUserName(string param)
    {
        username.text = " " + param;
    }
}
