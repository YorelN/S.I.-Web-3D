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
                    Application.ExternalCall(" FonctionClavicule ", "Humérus");

                }
                else
                {

                }

                if (hit.transform.name == "Clavicule")
                {
                    Application.ExternalCall(" FonctionClavicule ", "Clavicule");

                }
                else
                {

                }

                if (Physics.Raycast(ray, out hit))
                {
                    if (hit.transform.name == "Omoplate")
                    {
                        Application.ExternalCall(" FonctionClavicule ", "Omoplate");

                    }
                    else
                    {

                    }
                }
            }
        }
    }
}


