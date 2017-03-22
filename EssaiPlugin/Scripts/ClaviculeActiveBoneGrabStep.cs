using UnityEngine;
using System.Collections;

public class ClaviculeActiveBoneGrabStep : MonoBehaviour
{

    public GameObject Etape1;
    public GameObject Etape2;
    public GameObject Etape3;
    public GameObject Etape4;
    public GameObject Menu;
    public GameObject Clavicule;

    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

        if (Etape1.activeInHierarchy == true)
        {
            Clavicule.GetComponent<ClaviculeSector1>().enabled = true;
            Clavicule.GetComponent<ClaviculeSector2>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector3> ().enabled = false;
            Clavicule.GetComponent<ClaviculeSector4>().enabled = false;
            Clavicule.GetComponent<ClaviculeBackToMenu>().enabled = false;

        }

        if (Etape2.activeInHierarchy == true)
        {
            Clavicule.GetComponent<ClaviculeSector1>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector2>().enabled = true;
            Clavicule.GetComponent<ClaviculeSector3>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector4>().enabled = false;
            Clavicule.GetComponent<ClaviculeBackToMenu>().enabled = false;
        }

        if (Etape3.activeInHierarchy == true)
        {
            Clavicule.GetComponent<ClaviculeSector1>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector2>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector3>().enabled = true;
            Clavicule.GetComponent<ClaviculeSector4>().enabled = false;
            Clavicule.GetComponent<ClaviculeBackToMenu>().enabled = false;
        }

        if (Etape4.activeInHierarchy == true)
        {
            Clavicule.GetComponent<ClaviculeSector1>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector2>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector3>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector4>().enabled = true;
            Clavicule.GetComponent<ClaviculeBackToMenu>().enabled = false;
        }

        if (Menu.activeInHierarchy == true)
        {
            Clavicule.GetComponent<ClaviculeSector1>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector2>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector3>().enabled = false;
            Clavicule.GetComponent<ClaviculeSector4>().enabled = false;
            Clavicule.GetComponent<ClaviculeBackToMenu>().enabled = true;
        }

    }
}

