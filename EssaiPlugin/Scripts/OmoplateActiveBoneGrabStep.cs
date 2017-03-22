using UnityEngine;
using System.Collections;

public class OmoplateActiveBoneGrabStep : MonoBehaviour {

    public GameObject Etape1;
    public GameObject Etape2;
    public GameObject Etape3;
    public GameObject Etape4;
    public GameObject Menu;
    public GameObject Omoplate;

    // Use this for initialization
    void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
        if (Etape1.activeInHierarchy == true)
        {
            Omoplate.GetComponent<OmoplateSector1>().enabled = true;
            Omoplate.GetComponent<OmoplateSector2>().enabled = false;
            Omoplate.GetComponent<OmoplateSector3>().enabled = false;
            Omoplate.GetComponent<OmoplateSector4> ().enabled = false;
            Omoplate.GetComponent<OmoplateBackToMenu>().enabled = false;

        }

        if (Etape2.activeInHierarchy == true)
        {
            Omoplate.GetComponent<OmoplateSector1>().enabled = false;
            Omoplate.GetComponent<OmoplateSector2>().enabled = true;
            Omoplate.GetComponent<OmoplateSector3>().enabled = false;
            Omoplate.GetComponent<OmoplateSector4>().enabled = false;
            Omoplate.GetComponent<OmoplateBackToMenu>().enabled = false;
        }

        if (Etape3.activeInHierarchy == true)
        {
            Omoplate.GetComponent<OmoplateSector1>().enabled = false;
            Omoplate.GetComponent<OmoplateSector2>().enabled = false;
            Omoplate.GetComponent<OmoplateSector3>().enabled = true;
            Omoplate.GetComponent<OmoplateSector4>().enabled = false;
            Omoplate.GetComponent<OmoplateBackToMenu>().enabled = false;
        }

        if (Etape4.activeInHierarchy == true)
        {
            Omoplate.GetComponent<OmoplateSector1>().enabled = false;
            Omoplate.GetComponent<OmoplateSector2>().enabled = false;
            Omoplate.GetComponent<OmoplateSector3>().enabled = false;
            Omoplate.GetComponent<OmoplateSector4>().enabled = true;
            Omoplate.GetComponent<OmoplateBackToMenu>().enabled = false;
        }

        if (Menu.activeInHierarchy == true)
        {
            Omoplate.GetComponent<OmoplateSector1>().enabled = false;
            Omoplate.GetComponent<OmoplateSector2>().enabled = false;
            Omoplate.GetComponent<OmoplateSector3>().enabled = false;
            Omoplate.GetComponent<OmoplateSector4>().enabled = false;
            Omoplate.GetComponent<OmoplateBackToMenu>().enabled = true;
        }

    }
}
