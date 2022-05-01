<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medlist/bootstrap-5.1.3/dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
    <title>Interactions Checker</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <style>
        a{
            text-decoration: none;
        }
     
    </style>
</head>
<body>
<?php
include 'layout/header.php';
?>
    <div class="container">
        <div class="row align-items-start">
          <div class="col-md-8 py-5">
            <h3>Drug Interactions Checker</h3>
            <p>
                Start typing a drug name and select the best match from the list of suggestions. Repeat the process to add multiple drugs. Once your list is complete, you can check for interactions immediately or save your list for future reference.
            </p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter a drug name"  aria-describedby="button-addon2">
                <button type="button" class="btn btn-primary">Add</button>
            </div>
            <p>
                To view your <b>previously saved lists</b>, please <a href="#" style="text-decoration: none;">sign in</a></h6>
            </p>
            <br>
            
            <h3>What are drug interactions?</h3>
            <p>
                Anytime you take more than one medication, or even mix it with certain foods, beverages, or over-the-counter medicines, you are at risk of a drug interaction. Most drug interactions are not serious, but because a few are, it is important to understand the possible outcome before you take your medications.
            </p>
            <ul>
                <li>
                    <b>Drug-drug interactions</b> - These are the most common type of drug interaction. The more medications you take, the greater the chance for your drug interacting with another medicine. Drug-drug interactions can decrease how well your medications work, may increase minor or serious unexpected side effects, or even increase the blood level and possible toxicity of a certain drug. For example, if you take a pain medication, like <a href="" style="text-decoration: none;">Vicodin</a>,
                    and a sedating <a href="" style="text-decoration: none;">antihistamine</a>,such as Benadryl, at the same time you will have an additive amount of drowsiness as both medications cause this side effect.
                </li>
                <li>
                    <b>Drug-food/beverage interactions</b> - you have probably seen the stickers on your prescription bottle to “<a href="" style="text-decoration: none;">avoid grapefruit juice</a>at one time or another. This may seem odd, but certain medications can interact with foods or beverages. For example, grapefruit juice can lower the levels of enzymes in your liver responsible for breaking down medications. Blood levels of an interacting drug may rise, leading to toxicity. This interaction can occur with the commonly used  <a href="" style="text-decoration: none;">statins</a>to lower cholesterol, like atorvastatin, lovastatin, or simvastatin. The result can be muscle pain, or even severe muscle injury known as <a href="" style="text-decoration: none;"> rhabdomyolysis.</a>
                </li>
                <li>
                    <b>Drug-disease interactions</b> - Drug interactions don’t always occur with just other drugs or foods. Your existing medical condition can affect the way a drug works, too. For example, over-the-counter oral decongestants like pseudoephedrine (Sudafed) or phenylephrine (Sudafed PE) may increase blood pressure and can be dangerous if you have have <a href="" style="text-decoration: none;">high blood preasure</a>
                </li>
                
            </ul>
            <br>
            <h2>
                How do drug interactions occur?
            </h2>
            <p>Drug interactions can occur in several different ways:</p>
            <ol>
                <li>
                    A <b>pharmacodynamic interaction</b> occurs when two drugs given together act at the same or similar receptor site and lead to a greater (additive or synergistic) effect or a decreased (antagonist) effect. For example, when chlorpromazine, sometimes used to help prevent nausea and vomiting, and haloperidol, an antipsychotic medication for schizophrenia, are <a href="" class="hyperlink">given together</a> there may be a greater risk for causing a serious, possibly fatal irregular heart rhythm.

                </li>
                <li>
                    A <b>pharmacokinetic interaction</b>  may occur if one drug affects another drug’s absorption, distribution, metabolism, or excretion. Examples can help to explain these complicated mechanisms:
                    <ul>
                        <li>
                            <i>Absorption:</i>
                            Some drugs can alter the absorption of another drug into your bloodstream. For example, calcium can bind with some medications and block absorption. The HIV treatment dolutegravir <a href="" class="hyperlink">Tivicay</a>  should not be taken at the same time as calcium carbonate (Tums, Maalox, others), because it can lower the amount of dolutegravir absorbed into the bloodstream and reduce its effectiveness in treating HIV infection. Dolutegravir should be taken 2 hours before or 6 hours after medications that contain calcium or other minerals to help prevent this interaction. In the same manner, many drugs cannot be taken with milk or dairy products because they will bind with the calcium. Drugs that affect stomach or intestine motility, pH, or natural flora can also lead to drug interactions.

                        </li>
                        <li>
                            <i>Distribution:</i>
                            Protein-binding interactions can occur when two or more highly protein-bound drugs compete for a limited number of binding sites on plasma proteins. One example of an interaction is between fenofibric acid (Trilipix), used to lower cholesterol and triglycerides in the blood, and warfarin, a common blood thinner to help prevent clots. Fenofibric acid can 
                            <a href="" class="hyperlink">increase the effects</a> of warfarin and cause you to bleed more easily.
                        </li>
                        <li>
                            <i>Metabolism:</i>
                            Drugs are usually eliminated from the body as either the unchanged (parent) drug or as a metabolite that has been changed in some way. Enzymes in the liver, usually the CYP450 enzymes, are often responsible for breaking down drugs for elimination from the body. However, enzyme levels may go up or down and affect how drugs are broken down. For example, using <a href="" class="hyperlink">diltiazem</a>
                            (a blood pressure medication) with simvastatin (a medicine to lower cholesterol) may elevate the blood levels and side effects of <a href="" class="hyperlink">simvastatin</a>.Diltiazem can inhibit (block) the CYP450 3A4 enzymes needed for the breakdown (metabolism) of simvastatin. High blood levels of simvastatin can lead to serious liver and muscle side effects.

                        </li>
                        <li>
                            <i>Excretion:</i>
                            Some nonsteroidal antiinflammatory drugs (<a href="" class="hyperlink">NSAIDs</a>), ike indomethacin, may lower kidney function and affect the excretion of <a href="" class="hyperlink">lithium</a>, a drug used for bipolar disorder. You may need a dose adjustment or more frequent monitoring by your doctor to safely use both medications together.

                        </li>
                    </ul>
                    
                </li>
            </ol>
            <br>
            <h3>Why it's important to check for interactions</h3>
            <p>  Drug interactions are important to check for because they can:</p>
            <ul>
                <li>Affect how your medication works by changing levels of the drug in your blood</li>
                <li>Put you at risk for side effects and toxicity</li>
                <li>Worsen a medical condition you may already have.</li>
                

            </ul>
            
            <p>Checking for a drug interaction before it occurs can drastically lower your chance of a problem. Usually, your doctor and pharmacist will have already done this with your prescription medications, but it’s a good idea to double check and learn about these medications yourself. If you use any over-the-counter (OTC) medicine, including vitamins, herbal or food supplements, be sure to review these products for interactions with your prescription medications, too. Ask your pharmacist or doctor for advice if you are confused by the medical jargon.</p>
            
            <p>Drug interactions can also contribute to the cost of healthcare, as a serious drug interaction could result in injury, hospitalization, or rarely, death.</p>
            
           <p> Not all drug interactions are bad. Some medications may be better absorbed if taken with food or may have more favorable blood levels if taken with other medications that affect metabolic enzymes.</p>
           <br>
           <h3>Do drug interactions occur often?</h3>
           <p>Major drug interactions that are life-threatening are not common, but are of serious concern. Most drug interactions listed in package labeling may be theoretical based on a drug’s pharmacology. However, if you can avoid a possible drug interaction by selecting a different medication, that is always your best bet.</p>
     
           <p>Since most people do not know if two or more drugs could interact, it’s important to check the status of drug interactions with each new drug. In fact, for some drugs, stopping the medication could also affect the levels of other drugs in your system. Being proactive in your own health, checking for drug interactions, and discussing concerns with your healthcare provider can be a life-saving task.</p>
  
           <p>How often a drug interaction occurs, and your risk for a drug interaction, also depends upon factors such as:</p>
           <ul>
               <li>Total number of medications you take</li>
               <li>Age, kidney and liver function</li>
               <li>Diet and possible drug interactions</li>
               <li>Medical conditions</li>
               <li>Metabolic enzymes in your body and your genetics</li>
           </ul>
           <h3>What other factors cause interactions?</h3>
           <p>
               Don’t forget that <a href="" class="hyperlink"> alcohol</a>
               , caffeine, and  <a href="" class="hyperlink"> illegal drugs</a>
               of abuse can lead to serious drug interactions, too. For example, taking a pain medication such as
               <a href="" class="hyperlink">hydrocodone-acetaminophen</a> (Vicodin) with alcohol can cause additive drowsiness, may dangerously decrease your breathing rate, and in large doses may be toxic to the liver due to the combination of acetaminophen (<a href="" class="hyperlink">Tylenol</a>)and alcohol.

          </p>
          <p>
            Taking a medication that was prescribed for someone else or bought off of the Internet can be dangerous, too and lead to unexpected drug interactions. Avoid these practices.
          </p>
          <h3>How do I check for drug interactions?</h3>
          <p>Communication with your healthcare provider is key in helping to prevent drug interactions. Keep an up-to-date list of your medications, over-the-counter products, vitamins, herbals, and medical conditions. Share this list with your doctor, pharmacist, and nurse at each visit so that they can also screen for drug interactions.</p>
          <p>Review the Medication Guide, prescription information, warning labels, and Drug Facts Label with each new prescription or OTC product. Labeling may change as new information is learned about medications, so it’s important to review the information frequently.</p>
          <p>
              It’s always best to ask your healthcare provider for the latest information on drug interactions. However, you can also use our <a href="" class="hyperlink"> online drug interaction checker</a> 
              to learn more about possible drug interactions, too. This tool explains what the interaction is, how it occurs, the level of significance (major, moderate, or minor) and usually a suggested course of action. It will also display any interactions between your chosen drug(s) and food, beverages, or a medical condition.
          </p>
          <h3>What should I do if I find a drug interaction?</h3>
          <p>
            Remember - drug interactions are usually preventable with your proactive efforts. However, if you discover you are at risk for a possible drug interaction, call your doctor or pharmacist as quickly as you can. They will understand the significance of the interaction, and will be able to recommend the next best steps you should take. Do not stop your medication without talking to your healthcare provider first.
          </p>
         <p>
            <a href="" class="hyperlink">
                Check for drug Interactions
            </a>
         </p>
          </div>
          <div class="col-md-4 py-5">
            <div class="alert alert-secondary" role="alert">
                <h4>How to Prevent Deadly Drug Interactions</h4>
              <p>Some mixtures of medications can lead to serious and even fatal consequences.</p>
              <a href="" class="hyperlink">Here are 9 ways to stay safe</a>
            </div>




 
          

            <div class="alert alert-secondary" role="alert">
                <h4>Subscribe to our newsletters</h4>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    FDA Safety Alerts
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Daily MedNews
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Monthly Newsletter
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    I accept the Terms and Privacy Policy
                </label>
              </div>
              <div class="form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email Address" aria-label="Email address" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
                  </div>>

              </div>
            </div>
        </div>
    </div>
<?php
include 'layout/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>