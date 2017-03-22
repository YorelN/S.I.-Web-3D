using UnityEngine;
using System.Collections;
using System.Collections.Generic;
using UnityEngine.UI;

public class BoutonBones : MonoBehaviour {

    public Button EpauleBouton;
    public Animator ani1;
    public Animator ani2;
    public Animator ani3;
    public Animator ani4;
    public Animator ani5;
    public Animator ani6;
    public Animator ani7;
    public GameObject Epaule;
    public GameObject MenuPrincipale;
    public GameObject ArticulationColor;

    // Use this for initialization
    void Start()
    {
        
    }


    public void Menu()

    {
        EpauleBouton.enabled = true;
        ani1.enabled = true;
        ani2.enabled = true;
        ani3.enabled = true;
        ani4.enabled = true;
        ani5.enabled = true;
        ani6.enabled = true;
        ani7.enabled = true;
        Epaule.SetActive(true);
        MenuPrincipale.SetActive(true);
        ArticulationColor.GetComponent<Renderer>().material.color = Color.red;

    }

    // Update is called once per frame
    void Update () {

        if (Input.GetMouseButtonUp(0))
        {
            EpauleBouton.onClick.AddListener(Menu);
        }
        
    }


}
