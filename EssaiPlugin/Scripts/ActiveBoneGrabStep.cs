using UnityEngine;
using System.Collections;

public class ActiveBoneGrabStep : MonoBehaviour {

    public GameObject Etape1;
    public GameObject Etape2;
    public GameObject Etape3;
    public GameObject Etape4;
    public GameObject Menu;
    public GameObject Humérus;

    // Use this for initialization
    void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
        if (Etape1.activeInHierarchy == true)
        {
            Humérus.GetComponent<BoneGrabStep1>().enabled = true;
            Humérus.GetComponent<BoneGrabStep2>().enabled = false;
            Humérus.GetComponent<BoneGrabStep3>().enabled = false;
            Humérus.GetComponent<BoneGrabStep4>().enabled = false;
            Humérus.GetComponent<BoneStepMenu>().enabled = false;

        }

        if (Etape2.activeInHierarchy == true)
        {
            Humérus.GetComponent<BoneGrabStep1>().enabled = false;
            Humérus.GetComponent<BoneGrabStep2>().enabled = true;
            Humérus.GetComponent<BoneGrabStep3>().enabled = false;
            Humérus.GetComponent<BoneGrabStep4>().enabled = false;
            Humérus.GetComponent<BoneStepMenu>().enabled = false;
        }

        if (Etape3.activeInHierarchy == true)
        {
            Humérus.GetComponent<BoneGrabStep1>().enabled = false;
            Humérus.GetComponent<BoneGrabStep2>().enabled = false;
            Humérus.GetComponent<BoneGrabStep3>().enabled = true;
            Humérus.GetComponent<BoneGrabStep4>().enabled = false;
            Humérus.GetComponent<BoneStepMenu>().enabled = false;
        }

        if (Etape4.activeInHierarchy == true)
        {
            Humérus.GetComponent<BoneGrabStep1>().enabled = false;
            Humérus.GetComponent<BoneGrabStep2>().enabled = false;
            Humérus.GetComponent<BoneGrabStep3>().enabled = false;
            Humérus.GetComponent<BoneGrabStep4>().enabled = true;
            Humérus.GetComponent<BoneStepMenu>().enabled = false;
        }

        if (Menu.activeInHierarchy == true)
        {
            Humérus.GetComponent<BoneGrabStep1>().enabled = false;
            Humérus.GetComponent<BoneGrabStep2>().enabled = false;
            Humérus.GetComponent<BoneGrabStep3>().enabled = false;
            Humérus.GetComponent<BoneGrabStep4>().enabled = false;
            Humérus.GetComponent<BoneStepMenu>().enabled = true;
        }

    }
}
