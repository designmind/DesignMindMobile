using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Net;
using SendGrid;
using SendGrid.Helpers.Mail;

namespace DesignMindMobile.Areas.Services.Controllers
{
    public class MailController : Controller
    {
        [HttpPost]
        public JsonResult Index(Models.EmailContact emailContact)
        {
            dynamic sg = new SendGridAPIClient(System.Environment.GetEnvironmentVariable("SendGridKey"));

            Email from = new Email("mobile@designmind.com");
            Email to = new Email("mobile@designmind.com");
            var subject = "New Mobile request for information";
            Content content = new Content("text/plain", emailContact.Name + " is requesting information\r\n>" + emailContact.Email + "\r\n" + emailContact.Message +
                "\r\n");
            Mail mail = new Mail(from, subject, to, content);

            dynamic response = sg.client.mail.send.beta.post(requestBody: mail.Get());
            return Json(response, JsonRequestBehavior.AllowGet);
        }
    }
}