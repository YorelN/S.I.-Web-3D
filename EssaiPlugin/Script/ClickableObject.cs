using UnityEngine;
using System.Collections;

public class ClickableObject : MonoBehaviour
{

    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

        Ray ray = Camera.main.ScreenPointToRay(Input.mousePosition);
        RaycastHit hit;

        if (Input.GetMouseButtonDown(0))
        {
            if (Physics.Raycast(ray, out hit))
            {
                if (hit.transform.name == "Humérus")
                {
                    Application.ExternalCall(" FonctionHumérus ", "Humérus");
                    Debug.Log("C'est un humérus");
                }
                else
                {
                    Debug.Log("Ce n'est pas un humérus");
                }

                if (hit.transform.name == "Clavicule")
                {
                    Application.ExternalCall(" FonctionClavicule ", "Clavicule");
                    Debug.Log("C'est une clavicule");
                }
                else
                {
                    Debug.Log("Ce n'est pas une clavicule");
                }

                if (hit.transform.name == "Omoplate")
                {
                    Application.ExternalCall(" FonctionOmoplate ", "Omoplate");
                    Debug.Log("C'est l'omoplate");
                }
                else
                {
                    Debug.Log("Ce n'est pas l'omoplate");
                }

                if (hit.transform.name == "GrandPectoral")
                {
                    Application.ExternalCall(" FonctionGrandPectoral ", "GrandPectoral");
                    Debug.Log("C'est le grand pectoral");
                }
                else
                {
                    Debug.Log("Ce n'est pas le grand pectoral");
                }
            }
        }
    }
}


